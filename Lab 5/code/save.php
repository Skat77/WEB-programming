<?php
function redirectToHome()
{
    header('Location: /index5.php');
    exit();
}

$db_host = "db";
$db_user = "root";
$db_password = "helloworld";
$db_name = "web";

$sql = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($sql->connect_error) {
die("Ошибка подключения: " . $sql->connect_error);
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

$rec = $sql->prepare("INSERT INTO web.ad (email, category, title, description) VALUES (?, ?, ?, ?)");
$rec->bind_param("ssss", $email, $category, $title, $description);
$rec->execute();
$rec->close();

$sql->close();
redirectToHome();
