<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web-note</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav-side">
        <a href="form.php"><i class='bx bxs-message-square-add'></i></a>
    </div>
    <div class="main">

    <?php
    include "connection.php";
    
    $Readquery = "select * from note";

    $checkData = $connection->query($Readquery);

    $htmldata = "<div class='boxes'>";

    if($checkData == true){
        while($data = $checkData->fetch_assoc()){

            $boxColor = $data["color"];

            $htmldata .= "<div class='box1' style='background-color: ".$boxColor." '>";

            $htmldata .= "<h1>" .$data["title"] . "</h1>";

            $htmldata .= "<p>" .$data["description"] . "</p>";

            $delete = "delete.php?" . "&id=" . $data["ID"];

            $htmldata .= '<a href ="'.$delete.'" class="icon" style=" top:90%; background-color: black; width:80px; color:white; margin-left: 200px;text-decoration:none; border:1px solid black; border-radius : 12px;">delete</a>';

            $htmldata .= "</div>";

        }
        $htmldata .= "</div>";

        echo $htmldata;
    }
    ?>
    </div>
</body>
</html>