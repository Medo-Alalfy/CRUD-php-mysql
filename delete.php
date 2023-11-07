<?php

include('DB.php');

if (isset($_GET['deleteid'])) {

    $id = $_GET['deleteid'];

    $SQL = "delete from cruds where id=$id";
    $result=mysqli_query($conn,$SQL);
    if ($result) {
        header("location:index.php");
    }else{
        echo "ERROR";
    }

}










?>