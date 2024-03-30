<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Task 2a</title>
</head>
<body>
    <div id = "Task 2a">
        <?php
        if (isset($_POST['text'])) {
            $text = $_POST['text'];
            $words = str_word_count($text);
            $symbols = strlen($text);
            echo "Words: $words <br> Symbols: $symbols <br>";
        }
        ?>
        <form method = "post">
            <textarea name = "text" rows = "5"></textarea>
            <button type = "submit" name = "insert" value = "count">Ввод</button>
        </form>
    </div>
</body>
</html>
