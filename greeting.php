<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Приветствуем!</title>
</head>
<body>
    <h1>Дружелюный файл!</h1>
    <p>Этот файл - дружелюный. Попробуй заполнить форму ниже:</p>
    <form method="post">
        <input type="text" placeholder="Введи имя..." name="name" />
        <input type="submit" value="Поприветствовать"/>
    </form>
    <?php
        if (isset($_POST['name'])) {
            $greetings = htmlspecialchars(string: $_POST['name']);
            print("<p>Привет, {$greetings}</p>");
        }
    ?>
</body>
</html>