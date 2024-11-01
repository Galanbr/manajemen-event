<?php
require_once 'app/controllers/PesertaController.php';

$pesertaController = new PesertaController();

$url = $_SERVER['REQUEST_URI'];

if ($url == '/' || $url == '/peserta') {
    $pesertaController->index();
} elseif ($url == '/peserta/create') {
    $pesertaController->create();
} elseif ($url == '/peserta/store') {
    $pesertaController->store();
} else {
    echo "404 Not Found";
}