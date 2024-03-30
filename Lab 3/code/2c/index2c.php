<?php
session_start();
if (isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["salary"]) && isset($_POST["bio"])) {
    $_SESSION["user"] = [$_POST["name"], $_POST["age"], $_POST["salary"], $_POST["bio"]];
}
?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Task 2c</title>
</head>
<body>
<div id="user">
    <form method="POST">
        <label>Name: <input type="text" name="name"></label><br>
        <label>Age: <input type="text" name="age"></label><br>
        <label>Salary: <input type="text" name="salary"></label><br>
        <label>Bio: <input type="text" name="bio"></label><br>
        <button type="submit">Send</button>
    </form>
    <a href="2c_result.php"><button>Next</button></a>
</div>
</body>
</html>