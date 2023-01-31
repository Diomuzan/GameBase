<?php
$host = 'localhost';
$db  = 'gamebase';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$al = "";
$cdm = "";
$ft = "";
$pg = "";
$zr = "";

try {
    $dsn = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);

    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $al = $dsn->prepare("SELECT * FROM product WHERE `id` = 1;");
    $al->execute();

    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $cdm = $dsn->prepare("SELECT * FROM product WHERE `id` = 2;");
    $cdm->execute();

    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $ft = $dsn->prepare("SELECT * FROM product  WHERE `id` = 3;");
    $ft->execute();

    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pg = $dsn->prepare("SELECT * FROM product  WHERE `id` = 4;");
    $pg->execute();

    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $zr = $dsn->prepare("SELECT * FROM product WHERE `id` = 5;");
    $zr->execute();

}  catch (PDOException $error) {
    throw new PDOException($error->getMessage(), (int)$error->getCode());
}
?>

