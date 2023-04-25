<?php include_once 'include/connection.php';?>
<?php 
    if (isset($_POST['submit'])){
        $errors = array();

        if(!isset($_POST['username']) || strlen(trim($_POST['username'])) < 1){
            $errors[] = 'Username is missing / invalid';
        }
        if(!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1){
            $errors[] = 'Username is missing / invalid';

        }
        if (empty($errors)){
            $user = mysqli_real_escape_string($connection,$_POST['username']);
            $password = mysqli_real_escape_string($connection,$_POST['password']);

            $query = "SELECT * FROM users
                        WHERE email = '{$user}'
                        AND passwords = '{$password}'
                        LIMIT 1 ";
            
            $result_set = mysqli_query($connection,$query);

            if($result_set){
                if (mysqli_num_rows($result_set)==1){
                    header('Location: HomeA_L.html');

                }else{
                    $errors[]='invalide username / password';
                }
            }else{
                $errors[] = 'Database query faild';
            }
        }

    }

?>








<!DOCTYPE html>
<html>
<head>
    <title> Login  </title>
    <link rel="stylesheet" type="text/css" href="styles/Log in.css">   
</head>
    <body>
    <img src="image/unipic4.jpg" width="100%" height="100%">
    <div class="login-box">
    <img src="image/avatar.png" class="avatar">
        <h1>Login</h1>
        <?php 
            if (isset($errors )&&  !empty($errors)){
                echo 'Invalid username / password';
            }
        ?>
            <form method="post" action="Log in.php">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <label >New to Help Desk ? </label><a href="Register.php">Create an account.</a>

            <a href="Home.html">Home</a>   
            </form>
        
        
        </div>
    
    </body>
</html>