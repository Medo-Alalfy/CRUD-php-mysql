<?php

include('DB.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="contener">
        <button class="btn btn-primary my-5 "><a href="home.php" class="text-light">Add User</a>
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S1 no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Emial</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $SQL = "SELECT * FROM  cruds";
                $result = mysqli_query($conn, $SQL);
                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {

                        $id=$row['id'];
                        $name=$row['name'];
                        $email=$row['email'];
                        $mobile = $row['mobil'];
                        $password = $row['password'];

                        echo '   <tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>' . $password . '</td>
                       <td>
                <button class="btn btn-primary" ><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger" ><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
            </td>
                </tr>';

                    }
                    
                }
                
                ?>
             
            </tbody>
        </table>
    </div>
</body>

</html>