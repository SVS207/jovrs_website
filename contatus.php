<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="https://fontawesome.com" href="https://fontawesome.com">
    <title>Contact us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="contatus.css">
</head>

<body>

<div id="page1">
        <h2>Contact us</h2>
        <div id="container">
           <div class="boxs">
            <p><span><b><i class="fa-solid fa-location-dot"></i> Our location</b> </span><br>
                Ulwe Navi Mumbai </p>

             <p> <span><b><i class="fa-solid fa-phone"></i> Phone no</b></span> <br>
             9769223537</p> 

               <p><span><b><i class="fa-solid fa-envelope"></i> Email id:</b>  </span><br>
              <a href="mailto: jovrs09@gmail.com">jovrs09@gmail.com</a>  
               </p> 
            </div>
        </div>
        <div class="box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d766.1623986178608!2d73.03347264236575!3d18.974189530545278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3bfb82695bb%3A0x9f0a463bf5804f9e!2sKANA%20RESIDENCY!5e0!3m2!1sen!2sin!4v1732877851599!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
</div>
    <div class="mail">
        <form action="https://api.web3forms.com/submit" method="POST">
            <input type="hidden" name="access_key" value="db8d9ea5-f7e7-4846-9714-c669de74d09e">
            <h3>Contact us</h3><br>
            <label><i class="fa-solid fa-user"></i>  User Name<br> </label><br><input type="text" placeholder="Username" spellcheck="true" maxlength="20"
                name="user" autocomplete="off" required><br><br>
            <label><i class="fa-solid fa-phone"></i>  Phone Number<br></label> <br><input type="number" placeholder="10 digits numbers" maxlength="10"
                name="number" required><br><br>
            <label><i class="fa-solid fa-envelope"></i> Email Id<br></label> <br><input type="email" placeholder="@gamil.com" name="mail" required><br><br>
            <label> <i class="fa-solid fa-comment"></i> Do you have any question?/Feedback <br></label> <br><br><textarea placeholder="Question?/Feedback"
                rows="8" cols="60" name="QUESTIONS/Feedback" required> </textarea><br><br>
            <br><br>
            <input type="submit" value="Submit" name="Register" class="btn"> <br><br><br><br>
    
    </div>
    <br><br>
        </form>
 


</body>

</html>