<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="adminlogin.css">
</head>

<body>
    <div class="container" >
    <form action="#" method="POST" autocomplete="off" >
    <div class="title"> Admin  Login ID</div>
   <label> Name </label><br><input type="text" placeholder="AdminID" name="admin" required><Br><br>
   <label> Password </label><br><input type="password" placeholder=" login password" name="pass" maxlength="5" required><br><br>
   <input type="submit" value="Log in" name="login" class="btn">

  </div>
    </div>
    
</form>
</body>
</html>
<?php 
if(isset( $_POST["login"]))
    {
   $name = $_POST['admin'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM  adminr WHERE name='$name' && password='$password' ";
   $data = mysqli_query(mysql: $con, query: $query); 
  $total= mysqli_num_rows(result: $data);
  
  if($total == 1)
  {
    header(header: 'location:admin.php');

}
else{
    echo "Login Failed";
}
    }

 ?>


