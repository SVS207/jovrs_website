<?php include("connection.php"); 
$id = $_GET['email'];
$query = "DELETE FROM register WHERE email='$id'";
$data = mysqli_query($con,$query);

if($data){
    echo"<script>alert('Record Deleted')</script>";
    ?>
     <meta http-equiv="refresh"content="0; url=http://localhost:3000/admin.php">
    <?php
}
else {
    echo"<script>alert(' Failed Record Deleted')</script>";

}
?>
