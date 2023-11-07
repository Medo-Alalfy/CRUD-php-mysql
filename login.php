<?php

include('DB.php');


if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $SQL = "INSERT INTO cruds(name,email,mobil,password) VALUES('$name','$email','$mobile','$password') ";
    $result = mysqli_query($conn, $SQL);
    if ($result) {

        header("location:index.php");
    } else {
        die(mysqli_error($conn));
    }





}


?>