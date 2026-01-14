<?php
require __DIR__ . '/db.php';

$sql = file_get_contents(__DIR__ . '/install.sql');
$pdo->exec($sql);

echo 'Adatbázis telepítés kész';
