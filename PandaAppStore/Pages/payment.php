<script src="Js/sendToken.js"></script>
<div class="container">
    <div class="row justify-content-center p-4">
        <div class="col-xs-12 col-md-4">
            <img src="IMAGE/payment.png" class="img-fluid" style="width:80%;height:50px;">
            <div class="card card-default credit-card-box">
                <div class="card-header display-table">
                    <div class="row display-tr">
                        <h3 class="card-title display-td">Panda Store</h3>
                    </div>
                    <label>Name of the app </label>
                </div>
                <div class="card-body">
                    <form role="form" id="payment-form">
                        <div class="row">
                            <div class="col-xs-12 pull-right mb-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%;" name="email" placeholder="Email" autocomplete="cc-email" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12  mb-2">
                                <div class="form-group" style="width: 90%;">
                                    <div class="input-group">
                                        <input type="tel" class="form-control" name="cardNumber" placeholder="Card Number" autocomplete="cc-number" required autofocus />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7  mb-2">
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="cardExpiry" placeholder="MM / YY" autocomplete="cc-exp" required />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right  mb-2">
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="cardCVV" placeholder="CVV" autocomplete="cc-csc" required />
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-3  mb-2 mt-2">
                                <button class="btn w-100 btn-primary btn-lg btn-block" type="submit">PAY</button>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12  mb-2">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>