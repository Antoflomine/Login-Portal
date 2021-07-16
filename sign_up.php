<?php




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Portal</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    
   <div class="navbar">
       <h3>Sign-Up Portal</h3>
   </div>



   <div class="container">
        <center><h3 class="head-form">SIGN-UP</h3></center><hr>
       <form class="main-form">
           <div class="fn">
               <label for="fn">First Name:</label>
               <input type="text" name="fn" placeholder="Enter Your First Name">
           </div>
              <div class="ln">
               <label for="ln">Last Name:</label>
               <input type="text" name="ln" placeholder="Enter Your Last Name">
           </div>
           

           <div class="email">
               <label for="email">Email:</label>
               <input type="text" name="email" placeholder="Enter Email">
           </div>
           <div class="pass">
           <label for="pass">Create Your Password:</label>
               <input type="text" name="pass" placeholder="Enter Password">
           </div>
           <div class="cpass">
           <label for="cpass">Confirm Your Password:</label>
               <input type="text" name="cpass" placeholder="Re-Enter Your Password">
           </div>
              <div class="dob">
               <label for="dob">DOB:</label>
               <input type="date" name="dob" placeholder="Enter Your Date Of Birth">
                  
           </div>
           <div class="gender">
           <label for="gender">Choose Your Gender:</label>
               <select id="Gender">
               <option value="female">Female</option>
                     <option value="male">Male</option>
                     <option value="other">Other</option>
                   
               </select>
           </div>
           <div class="ph">
           <label for="ph">Phone Number:</label>
               <input type="text" name="ph" placeholder="Enter Your Phone Number">
               
           </div>
           <input type="submit" value="Sign-Up">
       </form>
   </div>


    <div class="footer">
        <h3>Login Portal Copyright 2020-2021.</h3>
        <ul class="footer-list">
            <li><a href="#">About</a></li>
            <li><a  href="#">Privacy Policy</a></li>
        </ul>
    </div>

   


</body>
</html>