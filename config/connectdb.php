<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=pos_and_inventory_salonteratai', 'root', '');
    echo 'Connection successfully';
} catch (PDOException $e) {
    echo $e->getMessage();
}
