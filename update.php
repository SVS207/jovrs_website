<?php include("connection.php"); 
$id = $_GET['email'];

$query = "SELECT * FROM register where  email = '$id'";
mysqli_query(mysql: $con, query:$query);
$data = mysqli_query(mysql: $con,query: $query);
$result = mysqli_fetch_assoc(result: $data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Detail</title>
    
</head>
<style>
    body {
        background-color: lavenderblush;
        padding: 0 10px;
    }
  
    .container {
        text-align: center;
        padding: 10px;
        margin: 150px auto;
        box-shadow: 15px 2px 10px rgb(0, 0, 0, 0.9);
        max-width: 800px;
        width:100%;
        background-color: lavender;
        font-size: 20px;
        font-weight: 600;
}
.title{
    font-size: 24px;
    font-weight: 800;
    margin-bottom: 25px;
    color: black;
    text-align: center;
    text-transform: uppercase;
    
}
form{
   padding: 10px  20px 15px 25px; 
   color: black;
}
label{
    width: 25px;
    margin-right: 10px;
    font-size: 15px;
}

input{
    text-align: center;
    width: 55%;
    outline: none;
    font-size: small;
    border-radius: 5px;
    transition: all 0.5s ease;
}
input:hover{
    padding-left: 3%;
}
.btn{
    width: 60%;
    padding-left: 8px 10px;
    background-color: lavenderblush;

    cursor: pointer;
    border-radius: 10px;
    outline: none;
}
.btn:hover{
    background-color: lavender;

}
@media (max-width: 600px) {
    input{
        flex-direction: column;
        align-items: flex-start;
 }
 label{
    margin-bottom: 5px;
 }
}
.login{
    font-size: medium;
    padding: 5px;
    text-align: center;
    color: black;
}


</style>

<body>

    <div class="container">
    
    <div class="title">
            Update Details
    </div>
   <form action="#" method="POST">
        <div class="form">
        <label> User Name </label> <br><br><input type="text" value="<?php echo $result['name']?>" placeholder="Enter your full name" spellcheck="true" name="user" required><br><br>
    <label> Phone Number</label><br><br> <input type="number" value="<?php echo $result['contact']?>" placeholder="10 digits numbers"  maxlength="10" name="number" required><br><br>
    <label> Email Id</label><br><br> <input type="email" value="<?php echo $result['email']?>" placeholder="@gamil.com"   name="mail" required><br><br>
    <label> Project Name</label><br><br> <input type="text"  value="<?php echo $result['pname']?>" placeholder="Enter your  Project name"   name="pname" required><br><br>
  
    <br><br>
  <input type="submit" value="Update"  class="btn" name="Update">  <br><br>
       
        </div>
      
</form>
    </div>
    
</body>
</html>
<?php
    if($_POST['Update'])
    {
        $name = $_POST['user'];
        $contact = $_POST['number'];
        $email = $_POST['mail'];
        $pname = $_POST['pname'];
 $query="UPDATE register SET Name='$name',contact='$contact', email='$email',pname='$pname' WHERE email='$id'";
 $data= mysqli_query($con,$query);
if($data)
{
    echo"<script>alert('Record updated')</script>";
    ?>
    <meta http-equiv="refresh"content="0; url=http://localhost:3000/admin.php">
<?php
}
else{
        echo "Failed";
 }
    }
   
    
?>
