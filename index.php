<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="index.php">
        <h1>Login</h1>
        <div class="textBox">
            <input type="text" placeholder="Username" name="username">
        </div>
        <div class="textBox">
            <input type="password" placeholder="Password" name="password">
        </div>
        <input class="log" type="submit" value="Login" name="login_btn">
        <div>
            Don't have an account?
            <br>
            <a href="#">Sign up</a>
        </div>
    </form>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","");
if(isset($_POST['login_btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM websitelogin.logindetails WHERE username = '$username'";
    $result=mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)){
        $resultPassword = $row['password'];
        if ($password==$resultPassword){
            header('Location:index.html');
        }else{
            echo "<script>
                alert('Login fail');
            </script>
            ";
        }
    }
}
?>