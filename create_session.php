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
    <title>Create Session</title>
</head>
<body>
    
<?php
    if (!isset($_SESSION['views'])){
        $_SESSION['views'] = 0;
        echo '<p>Numbers of time visited ' . $_SESSION['views'] . "</p><br>";
    }

    if (!isset($_SESSION['browser'])){
        $_SESSION['browser'] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.116 Safari/537.36 OPR/67.0.3575.130';
        echo '<p>My browser is ' . $_SESSION['browser'] . '<p><br>';
    }

    if (!isset($_SESSION['role'])){
        $_SESSION['role'] = 'admin';
        echo "Who are you?";
}
    ?>
</body>
</html>