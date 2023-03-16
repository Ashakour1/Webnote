<?php

include "connection.php";

if(isset($_POST["save"])){

    $title = $_POST["title"];

    $description = $_POST["description"];

    $color = $_POST["color"];

    $sqlquery = "insert into note (title,description,color) values (
    '$title',
    '$description',
    '$color'
    )";

    $CheckingData = $connection->query($sqlquery);

    if($CheckingData == true){
        header ("location: index.php");
    }else{
        echo $connection->connect_error;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="row justify-content-center mx-5">

<div class="col-4">
    <h1 class="mt-5 mb-5">Add Note</h1>


    <form method="post" class="form-control mt-5 ">

        <label>Enter title</label><br>

        <input type="text" name="title" placeholder="Title" class="form-control mt-4 p-3" ><br>
        <label>Enter description</label><br>
        <input type="text" name="description" placeholder="Description" class="form-control mt-4 p-3"><br>
        <input type="color" name="color" class="mb-5"><br>
       
        <input type="submit" name="save" class="btn btn-primary px-5 mb-2">
    </form>



</div>
</div>
</body>
</html>