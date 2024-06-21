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
    <div class="border"></div>
    <div class="TextCreateRoom">
        Создание румы
    </div>
    <div class="TextInputNick">Введите ваш ник</div>
    <input class="inputnick" id="inputnick" type="text" placeholder="Введите никнейм">
    <div class = "input-errors" id = "entry-erorr-msg"></div>
    <button class = "ready-to-play" id = "entry-button">Играть</button>
    </div>
    <?php include "includes\\footer.php";?>



    <script src="js\register.js"></script>
</body>
</html>