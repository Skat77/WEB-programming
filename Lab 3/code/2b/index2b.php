<?php
session_start();
if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["age"])) {
    $_SESSION["firstname"] = $_POST["firstname"];
    $_SESSION["lastname"] = $_POST["lastname"];
    $_SESSION["age"] = $_POST["age"];
}
?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Task 2b</title>
</head>
<body>
<div id="user">
    <form method="post">
        <label>First name: <input type="text" name="firstname"></label><br>
        <label>Last name: <input type="text" name="lastname"></label><br>
        <label>Age: <input type="text" name="age"></label><br>
        <button type="submit">Send</button>
    </form>
    <a href="2b_result.php"><button>Next</button></a>
</div>
</body>
</html>