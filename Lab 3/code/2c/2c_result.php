<?php
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>2c_result</title>
</head>
<body>
    <div>
        <h2>User</h2>
        <?php
        echo "<ul>";
        foreach ($_SESSION["user"] as $value) {
            echo "<li>$value</li>";
        }
        echo "</ul>";
        ?>
    </div>
</body>
</html>
