<?php
/**
 * Created by PhpStorm.
 * User: sanathls
 * Date: 21/10/19
 * Time: 2:53 AM
 */

session_start();

if(!isset($_SESSION['useremail']))
{
    header("Location: Login.php");
    return;
}

include 'Header.php';


?>


<title>PMS-Medicine</title>
</head>
<body>


</body>
</html>