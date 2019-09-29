<?php
/**
 * Created by PhpStorm.
 * User: sanathls
 * Date: 29/09/19
 * Time: 4:09 PM
 */
session_start();
if(isset($_SESSION['useremail']))
{
    header("Location: Home.php");
    return;
}
?>
<html>
<head>
    <title>PMS-Login</title>
</head>
<body>
<div align="center">
    <h1>Login</h1>
    <form action="../controllers/LoginController.php" method="post">
        <input type="text" name="useremail" placeholder="Enter Email"/>
        <br/><br/>
        <input type="password" name="password" placeholder="Enter Password"/>
        <br/><br/>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</div>
</body>
</html>
