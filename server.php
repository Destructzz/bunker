<?php
use Workerman\Worker;

require_once __DIR__ . '/vendor/autoload.php';

$wsWorker = new Worker('websocket://0.0.0.0:8080');

$wsWorker->count = 4;

$wsWorker->onConnect = function ($connection) {
    echo "New connection\n";
};

$wsWorker->onMessage = function ($connection, $data) use ($wsWorker) {
    echo "Received message: $data\n";
    foreach ($wsWorker->connections as $clientConnection) {
        $clientConnection->send($data);
    }
}; // <-- добавлена точка с запятой

$wsWorker->onClose = function ($connection) {
    echo "Connection Closed\n";
};

Worker::runAll();
?>
