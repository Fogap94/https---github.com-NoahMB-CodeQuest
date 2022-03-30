<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <title>Kuddoo Sign UP</title>
</head>
<body>
<?php include_once 'header.php';?>
        <br>
        
      <div class="SignUP_C">
        <div class="content">

            <form method ="GET" action="index2.html">          
                    <h1>
                        WELCOME
                    </h1>
                    <p>Create your Account</p>
                    <br>
                <label for="form-firstname" >
                     Name
                </label>
                <br>
                <input type="text" name="Firstname" id="form-firstname" placeholder="Insert Your Name" >
                <br>
    
                <label for="form_family_name">
                    UserName
                </label>
                <br>
                <input type="text" name="family_name" id="form_family_name" placeholder="User Name" required="true">
                <br>
                <label for="email">
                   Enter Email
                </label>
                <br>
                <input type="email" id="email" name="email" placeholder="Enter your Email"> 
                <br>
                <label for="your_gender">
                    Password
                </label>
                <br>
                <input type="password" id="pwd" name="pwd" minlength="8" placeholder="Enter your Password">
                <br>
                <label for="your_gender">
                   Repeat Password
                </label>
                <br>
                <input type="password" id="pwd" name="pwd" minlength="8" placeholder="Repeat your Password">
                <br>
                <label for="Age_form">
                    Your Birthday
                </label>
                <br>
                <input type="date" id="myDate" value="2014-02-09">
                <br>
                <label for="phone">
                    Enter your phone number
                </label>
                <br>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number"> 
                <br>
                <label for="your_gender">
                    Gender
                </label>
                <br>
                <select name="prefered" id="your_gender">
                    <option value="male">
                        Male
                    </option>
                    <option value="female">
                        Female
                    </option>
                </select>
                <br>
                <br>
            <input type="submit" value="Create Account" id="btn_submit" name="submit">
            <br>
            <br>
        </form>
        <p> <strong>Have an Accont Already? </strong> <a href="index2.html">LOG IN NOW</a> </p>
        
    
    </div>

</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.html">Home</a></li>
                <li class="list-inline-item"><a href="contact.html" target="_blank">CONTACT US</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">CODE QUEST © 2022</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>