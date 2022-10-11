<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="Log.css">
    <link rel="icon" href="../Logo.png">
    <script language="javascript" type="text/javascript" src="logpg.js">
    </script>
</head>
<body>
    <div class="logbox">
    <img src="avatar.png" class="avatar" alt="Avatar">
    <h1>Login Here</h1>
    <form method="post" name="logform" action="logaction.php" onsubmit="return validtext()">
        <p>Username</p>
        <input type="text" name="uname" size="15" maxlength="20" placeholder="Enter Username" required>
        <p>Password</p>
        <input type="password" name="pword" size="15" maxlength="20" placeholder="Enter Password" required>
        <!--display invalid user massage-->
        <?php if(isset($_SESSION['invalid-msg'])):?>
            <div class="invalid">
                <?php
                echo $_SESSION['invalid-msg'];
                unset($_SESSION['invalid-msg']);
                ?>
            </div>
        <?php endif; ?>
        <input type="submit" name="submit" value="Login">
         <br>
         <a href="../RegisterPage/Register.html">I don't have an account</a>
    </form>
    </div>
    
    
</body>
</html>