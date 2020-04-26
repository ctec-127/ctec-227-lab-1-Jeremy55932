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
    <title>Destroy Session</title>
</head>
<body>
<?php
    unset($_SESSION['views']);
    unset($_SESSION['browser']);
    unset($_SESSION['role']);

?>
</body>
</html>