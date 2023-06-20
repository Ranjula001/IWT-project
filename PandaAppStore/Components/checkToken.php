<?php
include('./connection.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = isset($_POST['token']) ? $_POST['token'] : "";
    if ($token == "") {
        $response_array['status'] = false;
    } else {
        $sql = "SELECT * from users where id='" . $token . "'";
        $query = mysqli_query($conn, $sql);

        if (!$query)  $response_array['status'] = false;
        else
        if ($row = mysqli_fetch_array($query)) {
            $response_array['status'] = true;
        } else {
            $response_array['status'] = false;
        }
    }

    header('Content-type: application/json');
    echo json_encode($response_array);
}
