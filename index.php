<?php
require_once "functions.php";
// Получение запрашиваемого URI
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Получение полного пути к файлу
$file = $_SERVER['DOCUMENT_ROOT'] . $request;

// Проверка существования файла или директории
if ($request !== '/' && (!file_exists($file) || is_dir($file))) {
    header("HTTP/1.0 404 Not Found");
    include '404.php';
}
if($request == '/'){
    include "menu.php";
}
?>