<?php
    include "inc/header.inc.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Destro All Session</title>
</head>
<body>
    <?php
        session_destroy();
    ?>
</body>
</html>