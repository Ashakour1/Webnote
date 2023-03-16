<?php

// connection

include "connection.php";


if(isset($_GET["id"])){

// varable so qabanaayo column id

    $id = $_GET["id"];

// variable delete gareynaayo idga

    $deleteQuery = "delete from note where id = '$id' ";
// checking 
    $QueryCheck = $connection->query( $deleteQuery);

    if($QueryCheck == true){

        // locationka ladhigaayo 
        
       header ("location: index.php");

    }else{
        echo $connection->connect_error;
    }


}
?>