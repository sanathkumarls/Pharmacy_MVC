<?php
/**
 * Created by PhpStorm.
 * User: sanathls
 * Date: 29/09/19
 * Time: 4:09 PM
 */
require_once '../utilities/Database.php';

class Medicine
{
    public function addMedicine($name,$category,$description)
    {
        $db=new Database();
        $con=$db->open_connection();

        $query="insert into medicine values (NULL,'$name','$category','$description')";
        $result=$con->query($query);
        return $result;
    }

    public function getMedicine($m_id = 0)
    {
        $db=new Database();
        $con=$db->open_connection();
        if($m_id != 0)
            $query="select * from medicine where m_id = '$m_id'";
        else
            $query="select * from medicine";

        $result=$con->query($query);

        if($result->num_rows > 0)
            return $result;

        return false;
    }
}