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
    <title>Read Session</title>
</head>
<body>
    <a href="create_session.php"></a>
    <a href="destroy_session.php"></a>
    <a href="destroy_all_session.php"></a>
<?php
    if (isset($_SESSION['views'])){
        $_SESSION['views'] += 1;
        echo '<p>Numbers of time visited ' . $_SESSION['views'] . "</p><br>";
    }

    if (isset($_SESSION['browser'])){
        echo "<p>" . $_SERVER['HTTP_USER_AGENT'] . "</p><br>";
    }

    if (isset($_SESSION['role'])){
        echo $_SESSION['role'];
    }
?>

</body>
</html>