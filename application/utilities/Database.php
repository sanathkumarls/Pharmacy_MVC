<?php
/**
 * Created by PhpStorm.
 * User: sanathls
 * Date: 29/09/19
 * Time: 4:09 PM
 */
class Database
{
        public function open_connection()
        {
            $host="localhost";
            $user="root";
            $pass="";
            $database="pharmacy";
            return mysqli_connect($host,$user,$pass,$database);
        }

        public function close_connection()
        {
            return null;
        }
}


/*
$db=new Database();

$con=$db->open_connection();
$con=$db->close_connection();
if($con)
    echo "connected";
else
    echo "not connected";

*/
