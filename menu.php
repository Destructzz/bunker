<?php
// Получение запрашиваемого URI
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Получение полного пути к файлу
$file = $_SERVER['DOCUMENT_ROOT'] . $request;

// Проверка существования файла или директории
if ($request !== '/' && (!file_exists($file) || is_dir($file))) {
    header("HTTP/1.0 404 Not Found");
    include '404.php';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles\style.css">
    <title>Document</title>
</head>
<body>
    <?php include "includes\header.php";?>
    <div class="TextCreateRoom">
        Создание румы
    </div>
    <div class="TextInputNick">Введите ваш ник</div>
    <input class="inputnick" id="inputnick" type="text" placeholder="Введите никнейм">
    <div class = "input-errors" id = "entry-erorr-msg"></div>
    <button class = "ready-to-play" id = "entry-button">Играть</button>
    </div>
        <div class="ImageCreateGamePage">
            <a href="Images/2.jpg"></a> 
            <img src="Images/2.jpg" alt="2">
            <div class="overlay-text">Добро пожаловать на страницу создания комнаты.
             Введите сдесь свой никнейм и нажмите начать игру, а после просто скопируйте 
             ссылку на комнату и отправте её своим друзьям. 
             <p>Удачной игры!</p>
            </div>   
        </div>
    <footer><div class="footer">
<p>Игра «Бункер Онлайн!» - невероятно атмосферная игра с великолепной нарративной частью. Это уникальная возможность испытать на себе наступление апокалипсиса и проверить свои переговорные и дедуктивные навыки, чтобы выжить! Игра сразу же погружает вас и вашу компанию в игру "с головой". Интересные катаклизмы и характеристики персонажей делают игровой процесс еще более насыщенным. Игра также производит определенный терапевтический эффект, ведь обсуждая как пережить катастрофу, мир за окном будет казаться относительно прекрасным. Игра способна тревожить душу, заставляя переживать и сочувствовать. Пройдя в бункер игроки получат невероятное удовольствие. Выжившие от того, что смогли проникнуть в бункер, а другие от общего процесса игры.</p>

<p>С помощью нашего сайта вы можете играть в «Бункер Онлайн!» не выходя из дома, или же с друзьями за чашкой кофе в небольшом уютном кафе своего города! Наша цель — сделать игру еще более атмосферной, и максимально интересной для каждого игрока!</p>
<div class>© 2024-<?php echo date('Y');?> Все права защищены. Копирование материалов сайта запрещено.</div>
    </div></footer>



    <script src="js\register.js"></script>
</body>
</html>