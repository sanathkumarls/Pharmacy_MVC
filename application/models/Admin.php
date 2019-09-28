<?php


include '../utilities/Database.php';


class Admin
{
        public function test()
        {
            $db=new Database();
            $con=$db->open_connection();
        }

}