<?php

$connection = mysqli_connect("localhost","root","","webnote");

if($connection == true){
    // echo "database succesfully";
    
}else{
    echo $connection->connect_error;
}

?>