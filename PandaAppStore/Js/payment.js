var $form = $("#payment-form");
$form.on("submit", payWithStripe);

function payWithStripe(e) {
  e.preventDefault();

  $form
    .find("[type=submit]")
    .html('Validating <i class="fa fa-spinner fa-pulse"></i>');

  var PublishableKey = "pk_test_b1qXXwATmiaA1VDJ1mOVVO1p";
  Stripe.setPublishableKey(PublishableKey);

  var expiry = $form.find("[name=cardExpiry]").payment("cardExpiryVal");
  var ccData = {
    number: $form.find("[name=cardNumber]").val().replace(/\s/g, ""),
    cvc: $form.find("[name=cardCVC]").val(),
    exp_month: expiry.month,
    exp_year: expiry.year,
  };

  Stripe.card.createToken(
    ccData,
    function stripeResponseHandler(status, response) {
      if (response.error) {
        $form.find("[type=submit]").html("Try again");
        $form.find(".payment-errors").text(response.error.message);
        $form.find(".payment-errors").closest(".row").show();
      } else {
        $form
          .find("[type=submit]")
          .html('Processing <i class="fa fa-spinner fa-pulse"></i>');
        $form.find(".payment-errors").closest(".row").hide();
        $form.find(".payment-errors").text("");
        console.log(response.id);
        console.log(response.card);
        var token = response.id;
        $.post("/account/stripe_card_token", {
          token: token,
        })
          .done(function (data, textStatus, jqXHR) {
            $form
              .find("[type=submit]")
              .html('Payment successful <i class="fa fa-check"></i>')
              .prop("disabled", true);
          })
          .fail(function (jqXHR, textStatus, errorThrown) {
            $form
              .find("[type=submit]")
              .html("There was a problem")
              .removeClass("success")
              .addClass("error");
            $form
              .find(".payment-errors")
              .text("Try refreshing the page and trying again.");
            $form.find(".payment-errors").closest(".row").show();
          });
      }
    }
  );
}
$("input[name=cardNumber]").payment("formatCardNumber");
$("input[name=cardCVC]").payment("formatCardCVC");
$("input[name=cardExpiry").payment("formatCardExpiry");

jQuery.validator.addMethod(
  "cardNumber",
  function (value, element) {
    return this.optional(element) || Stripe.card.validateCardNumber(value);
  },
  "Please specify a valid credit card number."
);

jQuery.validator.addMethod(
  "cardExpiry",
  function (value, element) {
    value = $.payment.cardExpiryVal(value);
    return (
      this.optional(element) ||
      Stripe.card.validateExpiry(value.month, value.year)
    );
  },
  "Invalid expiration date."
);

jQuery.validator.addMethod(
  "cardCVC",
  function (value, element) {
    return this.optional(element) || Stripe.card.validateCVC(value);
  },
  "Invalid CVC."
);

validator = $form.validate({
  rules: {
    cardNumber: {
      required: true,
      cardNumber: true,
    },
    cardExpiry: {
      required: true,
      cardExpiry: true,
    },
    cardCVC: {
      required: true,
      cardCVC: true,
    },
  },
  highlight: function (element) {
    $(element)
      .closest(".form-control")
      .removeClass("success")
      .addClass("error");
  },
  unhighlight: function (element) {
    $(element)
      .closest(".form-control")
      .removeClass("error")
      .addClass("success");
  },
  errorPlacement: function (error, element) {
    $(element).closest(".form-group").append(error);
  },
});

paymentFormReady = function () {
  if (
    $form.find("[name=cardNumber]").hasClass("success") &&
    $form.find("[name=cardExpiry]").hasClass("success") &&
    $form.find("[name=cardCVC]").val().length > 1
  ) {
    return true;
  } else {
    return false;
  }
};

$form.find("[type=submit]").prop("disabled", true);
var readyInterval = setInterval(function () {
  if (paymentFormReady()) {
    $form.find("[type=submit]").prop("disabled", false);
    clearInterval(readyInterval);
  }
}, 250);

