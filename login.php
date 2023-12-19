<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/cc125628c6.js" crossorigin="anonymous"></script>
    <style>
        .wholeform
        {
            background-color: red;
            position: absolute;
            align-self: center;
            padding: 50px;
            background: rgba(255,255,255,0.2);
            margin-left: 75vh;
            margin-top: 120px;
            border-radius:20px ;
        }
        i{
            margin-inline: -28px;
        }
        .user{
            align-content: center;
            margin-right: 20px;
        }
        input{
            width: 300px;
            height: 40px;
            border-radius: 15px;
            background: rgba(255,255,255,0.5);
            border-color: rgba(255,255,255,0.2);
        }
        #sub{
            margin-left: 20px;
            height: 40px;
            width: 300px;
        }
        body
        {
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url('https://img.freepik.com/free-vector/realistic-style-technology-particle-background_23-2148426704.jpg');
        }
        h1,h5,a,input{
            color: white;
        }
    </style>
</head>
<body><center>
    <form action="" method="post">
        <div class="wholeform">
            <h1>Login</h1><br>
        <div class="user">
            <input type="text" name="user" id="" placeholder="Username">
            <i class="fa-solid fa-user"></i><br>
        </div><br>
        <div class="user">
            <input type="password" name="pass" id="" placeholder="Password">
            <i class="fa-solid fa-lock"></i>
        </div>
        <h5>Don't have an account? <a href="signin.php">Sign In</a></h5>
        <input type="submit" value="Submit" name="submit" id="sub">
    </form>
        </div></center>
</body>
</html>

<?php
include 'conn.php';
if(isset($_POST['submit']))
{
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $sel="Select * from studata where username='$user' and password='$pass';";
    $output=mysqli_query($conn,$sel);
    $noofrows=mysqli_num_rows($output);
    if($noofrows>0)
    {
       header('location:homepagae.php');
    }
    else
    {
        echo "password and username is incorrect";
    }
}
?>