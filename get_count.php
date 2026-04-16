<?php
header('Content-Type: application/json; charset=utf-8');

$file  = __DIR__ . '/wishes.txt';
$count = 0;

if (file_exists($file)) {
    $content = file_get_contents($file);
    $count   = substr_count($content, '💌 الأمنية');
}

echo json_encode(['count' => $count]);
