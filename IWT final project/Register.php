<?php include_once 'include/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register </title>
        <link rel="stylesheet" href="styles/register.css" >
        <script src="js/register.js"></script>
    </head>
    <body>


        <body>
            <img src="image/unipic6.jpg" width="100%" height="100%">
            <div class="register">
                <h1>Registration Form</h1>
                    <form method="POST" action="registerPHP.php">
                        <label>First Name </label><br>
                        <input type="text" name="firstname" placeholder="First name " required><br>
                        <label>Last Name </label><br>
                        <input type="text" name="lastname"placeholder="First name " required ><br>
                
                        <label>Moblie Number</label><br>
                        <input type="number" name="phone" pattern="[0-9]{10}" required><br>
                
                        <label>Email</label><br>
                        <input type="text" name ="email" placeholder="abc@gmail.com" ><br>
                
                        <label>Date of Birth</label><br>
                        <input type="date" name = "DOB"><br>
                
                
                        <label for="password">Password</label><br>
                        <input type="password" name="password" name="password" ><br>
                        <label for="password">Re-Enter Password</label><br>
                        <input type="password" name="confirm" name="confirm">
        
                        
                        <button type="submit">Registration</button>
                        <a href="Log in.php">Already have an account?</a>/

                        <a href="Home.html">Home</a>
                    </form>
                
                </div>
            
            </body>
    </body>
</html>