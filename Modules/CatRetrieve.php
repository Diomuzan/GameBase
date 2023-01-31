<?php
$host = 'localhost';
$dsn   = 'gamebase';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$st= "";
$br = "";
$rc = "";
$rpg = "";
$sp = "";
$sx = "";
$column = "";

try {
    $dsn = new PDO("mysql:host=$host;dbname=$dsn;charset=$charset", $user, $pass);

    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $br = $dsn->prepare("SELECT * FROM categories WHERE `id` = 1;");
    $br->execute();

    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $rc = $dsn->prepare("SELECT * FROM categories WHERE `id` = 2;");
    $rc->execute();

    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $rpg = $dsn->prepare("SELECT * FROM categories WHERE `id` = 3;");
    $rpg->execute();

    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sp = $dsn->prepare("SELECT * FROM categories WHERE `id` = 4;");
    $sp->execute();

    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sx = $dsn->prepare("SELECT * FROM categories WHERE `id` = 5;");
    $sx->execute();

}  catch (PDOException $error) {
    throw new PDOException($error->getMessage(), (int)$error->getCode());
}
?>