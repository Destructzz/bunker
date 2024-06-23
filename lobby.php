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

    <div class = "username" id = "name"></div>
    <input type="text" class = "inputnick" id = "user-text" placeholder = "введите текст">
    <button class = "ready-to-play" id = "user-button">send</button>
    <div class = "test-contain" id = "user-contain">
        name:pidor msg
    </div> 

    <?php include "includes\\footer.php";?>
    <script src = "js\lobby.js"></script>
</body>
</html>