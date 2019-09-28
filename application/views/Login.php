<?php

session_start();
if(isset($_SESSION['email']))
{
    header("Location: Home.php");
    return;
}
?>
<html>
<head>
    <title>Login</title>
</head>
<body>

<div align="center">

    <h1>Login</h1>
    <form action="../controllers/LoginController.php" method="post">
        <input type="text" name="email" placeholder="Enter Email"/>
        <br/><br/>
        <input type="password" name="password" placeholder="Enter Password"/>
        <br/><br/>
        <input type="submit" name="submit" value="Submit"/>
    </form>

</div>
</body>
</html>
