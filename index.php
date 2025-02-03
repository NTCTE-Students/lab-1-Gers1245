<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Первый код в PHP</title>
</head>
<body>
    <h1>Этот код написан через HTML</h1>
    <li><a href="/text.php?message=Привет, Мир!">Перейти куда-то</a></li>
    <li><a href="/greeting.php">Перейти куда-то 1</a></li>
    <ul>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            print("<li>Элемент № {$i}</li>");
        }
    ?>
    </ul>
</body>
</html>