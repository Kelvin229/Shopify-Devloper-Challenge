<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >

    <title>Crud Operation</title>
  </head>
  <body>

  <div id="title" class="container my-5">
                    <h1>Kelvin Odinamadu</h1>
                    <p>An Inventory Tracking System for Shopify Logistics</p>
                </div>

  <div class="container">
      <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Create inventory items</a></button>
      <table class="table">
  <thead>
    <tr>
        <th scope="col">SL no</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Password</th>
        <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php

$sql = "Select * from `crud`";
$result = mysqli_query($con, $sql);
if ($result) {

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];
        echo ' <tr>
          <th scope="col">' . $id . '</th>
          <th scope="col">' . $name . '</td>
          <th scope="col">' . $email . '</td>
          <th scope="col">' . $mobile . '</td>
          <th scope="col">' . $password . '</td>
          <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Edit</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
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