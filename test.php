<?php
// import env.php
require_once __DIR__ . '/env.php';
// import lib/Database.php
require_once __DIR__ . '/lib/Database.php';

// connect db
$db = Database::getInstance();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php var_dump($db); ?>
    </p>
</body>
</html>