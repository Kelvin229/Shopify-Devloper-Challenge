<!--Author: Kelvin Odinamadu
    Shopify Backend Developer Project-->
<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `crud` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];
$item = $row['item'];
$location = $row['location'];
$priority = $row['priority'];

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $item = $_POST['item'];
  $location = $_POST['location'];
  $priority = $_POST['priority'];

  $sql = "update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password',item='$item',location='$location',priority='$priority'
    where id=$id";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location:display.php');
  }
  else {
    die(mysqli_error($con));
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
      <!--CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >

    <title>Crud Operation</title>
  </head>
  <body>
  <div id="title" class="container my-5">
                    <h1>Kelvin Odinamadu</h1>
                    <p>Edit your list below</p>
                </div>

    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name; ?>>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email; ?>>
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile; ?>>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password; ?>>
  </div>
  <div class="form-group">
    <label>Item</label>
    <input type="text" class="form-control" placeholder="Enter your inventory item" name="item" autocomplete="off" value=<?php echo $item; ?>>
  </div>
  <div class="form-group">
    <label>Location</label>
    <input type="text" class="form-control" placeholder="Enter the shipment location" name="location" autocomplete="off" value=<?php echo $location; ?>>
  </div>
  <div class="form-group">
    <label>Priority</label><br><br>
High<input type= "radio" name="priority" value="high"autocomplete="off" value=<?php echo $priority; ?>/>
Medium<input type= "radio" name="priority" value="medium"autocomplete="off" value=<?php echo $priority; ?>/>
Low<input type= "radio" name="priority" value="low"autocomplete="off" value=<?php echo $priority; ?>/>
<br><br>
</div>
 
  <button type="submit" class="btn btn-primary" name="submit">Edit</button>
</form>
    </div>

  </body>
</html>