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
}