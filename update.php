<?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $name = $_POST['name'];
 $password = $_POST['password'];
 $email= $_POST['email'];
 $phone = $_POST['phone'];
 $q = " update info2 set id=$id, name='$name', password='$password', email='$email', phone='$phone' where id=$id  ";

 $query = mysqli_query($con,$q);

 header('location:display.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

 <label> Name: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> Password: </label>
 <input type="text" name="password" class="form-control"> <br>

 <label> Email: </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> Phone: </label>
 <input type="text" name="phone" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>