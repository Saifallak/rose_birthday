<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$file = __DIR__ . '/wishes.txt';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Method not allowed']);
    exit;
}

$name = trim($_POST['name'] ?? 'مجهول');
$wish = trim($_POST['wish'] ?? '');

if (empty($wish)) {
    echo json_encode(['success' => false, 'error' => 'الأمنية فاضية']);
    exit;
}

// sanitize
$name = mb_substr(htmlspecialchars($name, ENT_QUOTES, 'UTF-8'), 0, 60);
$wish = mb_substr(htmlspecialchars($wish, ENT_QUOTES, 'UTF-8'), 0, 500);

$date  = date('Y-m-d H:i:s');
$entry = "──────────────────────────────\n";
$entry .= "📅 التاريخ  : {$date}\n";
$entry .= "👤 الاسم    : {$name}\n";
$entry .= "💌 الأمنية  : {$wish}\n";
$entry .= "──────────────────────────────\n\n";

$saved = file_put_contents($file, $entry, FILE_APPEND | LOCK_EX);

if ($saved === false) {
    echo json_encode(['success' => false, 'error' => 'فشل الحفظ، تأكد من صلاحيات الملف']);
    exit;
}

// count entries
$count = 0;
if (file_exists($file)) {
    $content = file_get_contents($file);
    $count   = substr_count($content, '💌 الأمنية');
}

echo json_encode(['success' => true, 'count' => $count]);
