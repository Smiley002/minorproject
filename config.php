<?php
// This File Contains Database Congiguration assuming you are running mysql  using user "Root" and password ""

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','register');

//try oonnecting to the database
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//check the connection
if($conn==false)
{
    die('Error: Cannot Connect');
}
?>


