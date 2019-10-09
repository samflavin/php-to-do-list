<?php 

$db = new Mysqli;

$db->connect('localhost', 'root', '', 'crud2');

if(!$db){
    echo "Success!";
}

?>