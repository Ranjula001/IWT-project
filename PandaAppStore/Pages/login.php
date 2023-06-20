<div class="background">
    <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="pass"><a href="?page=forgetPW">Forget Password?</a></div>
            <input type="submit" value="Login">
            <div class="signup_link">
                Not a Member? <a href="?page=register">Register</a>
            </div>
        </form>
    </div>
</div>
<?php
include('./Components/connection.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * from users where username='" . $username . "' AND password='" . $password . "'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            $token = $row["id"];
?>
            <script>
                localStorage.setItem("token", <?php echo $token ?>);
                location.replace("?page=home");
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert("Login Failed !");
        </script>
<?php
    }
}
?>