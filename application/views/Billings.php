<?php

/**
 * Created by PhpStorm.
 * User: sanathls
 * Date: 29/09/19
 * Time: 4:09 PM
 */
session_start();

if(!isset($_SESSION['useremail']))
{
    header("Location: Login.php");
    return;
}


include 'Header.php';

?>

<title>PMS-Billings</title>
</head>
<body>

<table class="table table-borderless">
    <thead>
    <tr>
        <th scope="col">Bill Id</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Medicine Name</th>
        <th scope="col">Supplier Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Cost</th>
        <th scope="col">Date</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    </tbody>
</table>
</body>
</html>
