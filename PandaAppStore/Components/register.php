<?php
echo "please wait...";
include('./connection.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$country = $_POST['country'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];

$sql = "INSERT INTO users ( firstname, lastname, email, address, contact, country, gender, username, password) VALUES ('" . $fname . "', '" . $lname . "', '" . $email . "', '" . $address . "', '" . $contact . "', '" . $country . "', '" . $gender . "', '" . $username . "', '" . $password . "')";
echo $sql;

if ($conn->query($sql) === TRUE) {
?>
    <script>
        alert("Register Successful !")
        window.location.replace('/panda?page=login')
    </script>
<?php
} else {
?>
    <script>
        alert("Register Failed !\nError : " + <?php echo "Error: " . $sql . "<br>" . $conn->error; ?>)
        window.location.replace('/panda?page=register')
    </script>
<?php
}
?>