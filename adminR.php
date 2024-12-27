<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New registertion</title>
    
</head>
<style>
    body {
        background-color: lavenderblush;
        padding: 0 10px;
    }
  
    .container {
        padding: 10px;
        margin: 150px auto;
        box-shadow: 15px 2px 10px rgb(0, 0, 0, 0.9);
        max-width: 500px;
        width: 100%;
        background-color: lavender;
        font-size: 20px;
        font-weight: 400;
        border-radius: 20px;
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
    margin-left: 45%;
    width: 25px;
    font-weight: 500;
    font-size: medium;
}
input{
    text-align: center;
    width: 100%;
    outline: none;
    font-size: small;
    border-radius: 5px;
    transition: all 0.5s ease;
}
.btn{
    width: 100%;
    padding-left: 8px 10px;
    background-color:lavenderblush;

    cursor: pointer;
    border-radius: 100px;
    outline: none;
}
.btn:hover{
    background-color: lavender;

}
@media (max-width: 570px) {
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
            Admin ID
    </div>
   <form action="#" method="POST">
        <div class="form" >
            <label>Name</label>  <input type="text" placeholder="adminID" spellcheck="true" maxlength="20"
                    name="admin" required><br><br>
                     
                    <label>Password</label>  <input type="password" placeholder="password" maxlength="6" name="pass"required><br><br>
           <input type='submit' value="Register" class='btn' name='register' onclick="message()"> 
      
        </div>
        <script src="ADD.js"></script>
</form>
    </div>
    
</body>
</html>
<?php
    if($_POST['register'])
    {
   $name      = $_POST['admin'];
 
   $password   = $_POST['pass'];
  
 $query = "INSERT INTO adminr VALUES('$name','$password')";
 $data= mysqli_query(mysql: $con,query: $query);
if($data)
{
    echo"Data inserted  into database";
}
else{
        echo "Failed";
 }
    }
    if($data){ 
   header(header: "location:adminlogin.php");}
    
?>
