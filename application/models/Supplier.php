<?php

/**
 * Created by PhpStorm.
 * User: sanathls
 * Date: 29/09/19
 * Time: 4:09 PM
 */
require_once '../utilities/Database.php';

class Supplier
{
    public function addSupplier($name,$address)
    {
        $db=new Database();
        $con=$db->open_connection();

        $query="insert into supplier values (NULL,'$name','$address')";
        $result=$con->query($query);
        return $result;
    }

    public function getSupplier()
    {
        $db=new Database();
        $con=$db->open_connection();

        $query="select * from supplier";
        $result=$con->query($query);
        if($result->num_rows > 0)
            return $result;

        return false;
    }
}
/*
$supObj = new Supplier();
$res=$supObj->getSupplier();
if($res)
{
    while ($row=$res->fetch_assoc())
    {
        echo $row['sup_id']." ";
        echo $row['sup_name']." ";
        echo $row['sup_address']."<br/>";
    }
}
else
    echo "no rows exist";
*/