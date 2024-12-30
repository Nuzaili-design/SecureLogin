<?php
$servername="localhost";
$username="root1";
$password="1234";
$dbname="registerdb";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connected failed" .$conn->connect_error);
}

/*
$db= "CREATE DATABASE registerdb";
if($conn->query($db)===TRUE){
    echo"DATABASE HAS BEEN CREATED!";
}
else{
    echo "ERROR";
}
*/


/*
$table="CREATE TABLE names(

id INT (11) AUTO_INCREMENT PRIMARY KEY,
username VARCHAR (255) NOT NULL,
password VARCHAR (255) NOT NULL

)";
if($conn->query($table)===TRUE){
    echo "TABLE HAS BEEN CREATED!";
}else{
    echo "ERROR";
}
*/


?>