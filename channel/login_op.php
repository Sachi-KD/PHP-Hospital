<?php

//learn from w3schools.com
//Unset all the server side variables

session_start();

$_SESSION["user"] = "";
$_SESSION["usertype"] = "";

// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');

$_SESSION["date"] = $date;

//import database
include("connection.php");

$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];

    $result = $database->query("select * from webuser where email='$email'");
    if ($result->num_rows == 1) {
        $utype = $result->fetch_assoc()['usertype'];
        if ($utype == 'p') {
            $checker = $database->query("select * from patient where pemail='$email' and ppassword='$password'");
            if ($checker->num_rows == 1) {
                //   Patient dashboard
                $_SESSION['user'] = $email;
                $_SESSION['usertype'] = 'p';

                $response['success'] = true;
                $response['redirect'] = 'patient/index.php';
            } else {
                $response['success'] = false;
                $response['message'] = 'Wrong credentials: Invalid email or password';
            }
        } elseif ($utype == 'a') {
            $checker = $database->query("select * from admin where aemail='$email' and apassword='$password'");
            if ($checker->num_rows == 1) {
                //   Admin dashboard
                $_SESSION['user'] = $email;
                $_SESSION['usertype'] = 'a';

                $response['success'] = true;
                $response['redirect'] = 'admin/index.php';
            } else {
                $response['success'] = false;
                $response['message'] = 'Wrong credentials: Invalid email or password';
            }
        } elseif ($utype == 'd') {
            $checker = $database->query("select * from doctor where docemail='$email' and docpassword='$password'");
            if ($checker->num_rows == 1) {
                //   Doctor dashboard
                $_SESSION['user'] = $email;
                $_SESSION['usertype'] = 'd';

                $response['success'] = true;
                $response['utype'] ="Doctor";
                $response['redirect'] = 'doctor/index.php';
            } else {
                $response['success'] = false;
                $response['message'] = 'Wrong credentials: Invalid email or password';
            }
        }
    } else {
        $response['success'] = false;
        $response['message'] = 'We can\'t find any account for this email.';
    }
} else {
    $response['success'] = false;
    $response['message'] = 'Invalid request method.';
}

// Send the JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
