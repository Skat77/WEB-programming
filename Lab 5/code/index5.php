<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lab 5</title>
</head>
<body>
<div id="form">
    <form action="save.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <label for="category">Category</label>
        <select name="category" required>
            <option value="phones">Phones</option>
            <option value="cars">Cars</option>
            <option value="other">Other</option>
        </select>
        <label for="title">Title</label>
        <input type="text" name="title" required>

        <label for="description">Description</label>
        <textarea rows="5" name="description"></textarea>
        <input type="submit" value="Save">
    </form>
</div>

<div id="table">
    <table>
        <thead>
            <th>Category</th>
            <th>Title</th>
            <th>Email</th>
            <th>Description</th>
        </thead>
        <tbody>
            <?php
            $db_host = "db";
            $db_user = "root";
            $db_password = "helloworld";
            $db_name = "web";
            $link = new mysqli($db_host, $db_user, $db_password, $db_name);
            if ($link->connect_error) {
                die("Ошибка подключения: " . $link->connect_error);
            }

            $result = $link->query("SELECT * FROM web.ad");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['category'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "</tr>";
            }

            $link->close();
            ?>
        </tbody>
    </table>
</div>
</body>
</html>

