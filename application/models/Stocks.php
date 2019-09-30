<?php
/**
 * Created by PhpStorm.
 * User: sanathls
 * Date: 29/09/19
 * Time: 4:09 PM
 */
require_once '../utilities/Database.php';

class Stocks
{
    public function addStocks($m_id,$sup_id,$quantity,$cost,$date_supplied)
    {
        $db = new Database();
        $con= $db->open_connection();

        $query="insert into stocks values (NULL,'$m_id','$sup_id','$quantity','$quantity','$cost','$date_supplied')";
        $res=$con->query($query);
        return $res;
    }
}