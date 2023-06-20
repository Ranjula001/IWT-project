<div class="register-content">
    <div class="register-container">
        <div class="title" align="center">Register</div>
        <form onsubmit="return onRegister(event)" action="./Components/register.php" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">First Name</span>
                    <input type="text" name="fname" placeholder="Enter your First Name" required>
                </div>

                <div class="input-box">
                    <span class="details">Country</span>
                    <input type="text" name="country" placeholder="Enter your Country" required>
                </div>

                <div class="input-box">
                    <span class="details">Last Name</span>
                    <input type="text" name="lname" placeholder="Enter your Last Name" required>
                </div>

                <div class="input-box">
                    <span class="details">Create a Username</span>
                    <input type="text" name="username" placeholder="Enter your Username" required>
                </div>

                <div class="input-box">
                    <span class="details">Email Address</span>
                    <input type="text" name="email" placeholder="Enter your Email Address" required>
                </div>

                <div class="input-box">
                    <span class="details">Create a Password</span>
                    <input type="text" name="password" placeholder="Enter a Password" required>
                </div>

                <div class="input-box">
                    <span class="details">Personal Address</span>
                    <input type="text" name="address" placeholder="Enter your Personal Address" required>
                </div>

                <div class="input-box">
                    <span class="details">Re-Enter Password</span>
                    <input type="text" name="cpassword" placeholder="Re-Enter your Password" required>
                </div>


                <div class="input-box">
                    <span class="details">Contact Number</span>
                    <input type="text" name="contact" placeholder="Enter your Contact Number" required>
                </div>
            </div>

            <div class="gender-details">
                <input type="radio" name="gender" value="male" id="dot-1" required>
                <input type="radio" name="gender" value="female" id="dot-2" required>
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="grnder">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="grnder">Female</span>
                    </label>
                </div>
            </div>
            <div class="radio-group">
                <label class="radio">
                    <input type="checkbox" value="confirm" name="confirmation" required>
                    I certify that I have read and accept the <a href "#">Terms of Service</a>and <a href "#">Privacy Policy.</a> I have read and understand the all mentioned.
                    <span></span>
                    <span class="con">
                </label>
            </div>
            <br>
            <div class="text-center button">
                <input type="submit" value="Register">
            </div>
            <br>
        </form>
        <p class="text-center"> Already Have an Account?</p>
        <br>
        <div class="text-center button">
            <input type="button" value="Login as a User">
        </div>
        <br>
        <div class="text-center button">
            <input type="button" value="Login as a Developer">
        </div>
    </div>
</div>