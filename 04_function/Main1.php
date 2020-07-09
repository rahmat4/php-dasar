<?php
    function salam(){
        return "Selamat Datang, Admin...";
    }

    function show($nama,$date){
        echo "Selamat $date , $nama .... ";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?php echo salam(); ?></h1>
    <h1><?php show("rahmat","pagi"); ?></h1>
</body>
</html>