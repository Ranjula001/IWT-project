<!DOCTYPE html>
<html lang="en">
<?php
include('./Components/head.php');
?>

<body>
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : "login";
    if ($page != "login" && $page != "register" && $page != "forgetPW")
        include('./Components/header.php'); ?>
    <main style="min-height: 25%;">
        <?php
        //navigation routes
        switch ($page) {
            case "home":
                include('./Pages/home.php');
                break;
            case "register":
                include('./Pages/register.php');
                break;
            case "edit-profile":
                include('./Pages/editProfile.php');
                break;
            case "payment":
                include('./Pages/payment.php');
                break;
            case "contactUs":
                include('./Pages/contactUs.php');
                break;
            case "aboutUs":
                include('./Pages/aboutUs.php');
                break;
            case "forgetPW":
                include('./Pages/forgetPW.php');
                break;
            case "termsOfServices":
                include('./Pages/termsOfServices.php');
                break;
            case "myApps":
                include('./Pages/myApps.php');
                break;
            case "freeApps":
                include('./Pages/freeApps.php');
                break;
            case "paidApps":
                include('./Pages/paidApps.php');
                break;
            case "download":
                include('./Pages/download.php');
                break;
            case "developer":
                include('./Pages/developer.php');
                break;
            case "login":
                include('./Pages/login.php');
                break;
            default:
                include('./Pages/404.php');
        }

        ?>
    </main>
    <?php
    if ($page != "login" && $page != "register" && $page != "forgetPW")
        include('./Components/footer.php');
    ?>
</body>

</html>