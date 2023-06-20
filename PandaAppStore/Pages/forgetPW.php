<div class="forget">
    <div class="box">
        <center><img src="IMAGE/ResetPassword.png"><br />
            <h3> Reset pasword </h3>

            <p> Enter your Email and we'll send you a link to reset your password<br>
                <br>


                <input type="text" id="Email" name="Email" placeholder="Enter your Email..">
                <br><br><br>

                <input type="submit" onclick="sendEmail()">


                <script>
                    function sendEmail() {
                        var userEmail = "test123@gmail.com"
                        var email = document.getElementById("Email").value;
                        if (userEmail == email) {
                            alert("successfully send passowrd reset link to your e-mail account");
                        } else {
                            alert("Please enter valid Email address");
                        }

                    }
                </script>
        </center>
    </div>
</div>