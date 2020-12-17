<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edapt";
// Create connection
$conn = mysqli_connect($servername, $username, $password ,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto"
      rel="stylesheet"
      type="text/css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     
     
    <title>Edapt </title>
    <meta charset="UTF-8" />
   <style>
       body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url() no-repeat;
    background-size: cover;
}
 
.login-box {
    width: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #191970;
}
 
.login-box h1 {
    float: left;
    font-size: 40px;
    border-bottom: 4px solid #191970;
    margin-bottom: 50px;
    padding: 13px;
}
 
.textbox {
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid #191970;
}
 
.fa {
    width: px;
    float: left;
    text-align: center;
}
 
.textbox input {
    border: none;
    outline: none;
    background: none;
    font-size: 18px;
    float: left;
    margin: 0 10px;
}
 
.button {
    width: 100%;
    padding: 8px;
    color: #ffffff;
    background: none #191970;
    border: none;
    border-radius: 6px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
}
   </style>

  </head>
  <body>
  
    <script src="//code.jquery.com/jquery.min.js"></script>
    <form action="validate.php" method="post">
        <div class="login-box">
            <h1>Login</h1>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Adminname"
                         name="adminname" value="">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
 
            <input class="button" type="submit"
                     name="login" value="Sign In">
        </div>
    </form>

    <script>
      AOS.init();
    </script>
     <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
     <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
     <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
