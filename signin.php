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
            padding: 60px;
            background: rgba(255,255,255,0.2);
            margin-left: 70vh;
            margin-top: 30px;
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
            margin-left: 23px;
            height: 40px;
            width: 300px;
        }
        body
        {
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url('https://e0.pxfuel.com/wallpapers/386/919/desktop-wallpaper-website-background-website-login-page-background.jpg');
        }
    </style>
</head>
<body><center>
    <div class="wholeform">
    <h2>Sign In</h2><br>
    <form action="" method="post">
        <div class="user">
            <input type="text" name="name" id="" placeholder="Username">
            <i class="fa-solid fa-signature"></i>
        </div><br>
        <div class="user">
            <input type="text" name="username" id="" placeholder="Name">
            <i class="fa-solid fa-user"></i><br>
        </div><br>
        <div class="user">
            <input type="email" name="email" id="" placeholder="Email">
            <i class="fa-solid fa-envelope"></i>
        </div><br>
        <div class="user">
            <input type="password" name="password" id="" placeholder="Password">
            <i class="fa-solid fa-lock"></i>
        </div><br>
        <div class="user">
            <input type="number" name="phone" id="" placeholder="Phone No">
            <i class="fa-solid fa-phone"></i>
        </div><br>
        <div class="user">
            <input type="number" name="age" placeholder="Age">
            <i class="fa-solid fa-person"></i>  
        </div><br>
        
        
        <input type="submit" value="Submit" id="sub" name="Submit">
    </form>
    </div></center>
</body>
</html>

<?php
include 'conn.php';
if(isset($_POST['Submit']))
{
    $user =$_POST['username'];
$name =$_POST['name'];
$email =$_POST['email'];
$pass=$_POST['password'];
$ph =$_POST['phone'];
$age=$_POST['age'];

$insert =" insert into studata(name,username,password,email,phone,age) values('$name','$user','$pass','$email','$ph',$age)"; 

$output =mysqli_query($conn,$insert);

if($output)
{
    header('Location:login.php');
}
else{
    echo "error";
}
}
?>