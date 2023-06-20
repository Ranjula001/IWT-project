function verifyToken() {
  var token =
    localStorage.getItem("token") == null ? "" : localStorage.getItem("token");

  $.ajax({
    type: "post",
    url: "./Components/checkToken.php",
    data: { token },
    dataType: "json",
    success: function (result) {
      console.log(result);
      if (!result.status) {
        location.replace("?page=login");
        localStorage.removeItem("token");
      }
    },
    error: function (xhr, status, error) {
      console.log(xhr);
      location.replace("?page=login");
      localStorage.removeItem("token");
    },
  });
}
this.onload = verifyToken;
