<?php include("connection.php"); ?>

<html>
  <head>
    <title> Display</title>

  </head>
<link rel="stylesheet" href="admin.css"> 
  <body>
<?php 
   
  error_reporting(error_level: 0);
    $query = "SELECT * FROM register";
    mysqli_query(mysql: $con, query:$query);
    $data = mysqli_query(mysql: $con,query: $query);

   $total =  mysqli_num_rows(result: $data);
  //echo $total;
   if($total != 0)

   {
    ?>
 <h2> <br>Display Register Records</h2>
<br><br><br><br><br>
<a href="adminlogin.php">
<input type="button" value="Log out"  class="bnt"></a>
</a>
<br><br>
 <center> <table border="1px" cellspacing="5" width="100%">
    <tr>  
    <th widht="20%">name</th>
   <th  widht="20%">contact</th>
    <th widht="20%">email</th>
    <th widht="20%">pname</th>
    <th widht="20%">Operations</th>
  </tr>
<?php
   while($result = mysqli_fetch_assoc(result: $data))
   {
    echo"<tr> 
        <td>".$result["name"]."</td>
         <td>".$result["contact"]."</td>
      <td>".$result["email"]."</td>
      <td>".$result["pname"]."</td>
      <td><a href='update.php?email=$result[email]'><input type='submit' value='Update' class='update'></a>
      <a href='delete.php?email=$result[email]'><input type='submit' value='Delete' class='delete' onclick='deletemsg()'></a></td>
      </tr>
      ";
   }
}
else{
    echo "table has no records";
}
?>
</table></center>

<script>
function deletemsg(){
  return alert('Are you want to delete record?');
}
</script>

  </body>
  </html>