<?php
    header('Content-Type: text/html; charset=utf-8');

    $servername =   'localhost';
    $username   =   'passfymail';
    $password   =   'jaCa62hAs';
    $dbname     =   "passfymail";
    $conn=new mysqli($servername,$username,$password,
                    "$dbname");
if(!$conn)
{
   die('Не получилось подключиться к БД:' .mysql_error());
}
?>