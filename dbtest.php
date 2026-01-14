<?php
try {
    require __DIR__ . '/db.php';
    echo 'A kapcsolódás sikeres';
} catch (Throwable $e) {
    echo 'A kapcsolódás sikertelen: ' . $e->getMessage();
}
