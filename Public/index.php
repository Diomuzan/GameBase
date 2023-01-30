<?php
require '../Modules/categories.php';
require '../Modules/login.php';
require '../Modules/logout.php';
require '../Modules/database.php';
require '../Modules/common.php';
require '../Templates/defaults/GameBase_Head.php';
require '../Templates/defaults/GameBase_Navbar.php';


session_start();
//var_dump($_SESSION);
//var_dump($_POST);
$message="";

$request = $_SERVER['REQUEST_URI'];

$params = explode("/", $request);
print_r($request);
$title = "GameBase";
$titleSuffix = "";

//$params[1] is de action
//$params[2] is een extra getal die de action nodig heeft om zijn taak uit te voeren
switch ($params[1]) {

    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        //var_dump($categories);die;
        include_once "/Users/rizot/Documents/GitHub/GameBase/Templates/GameBase_Categories.php";
        break;

    case 'category':
        include_once "/Users/rizot/Documents/GitHub/GameBase/Templates/GameBase_Homepage.php";
        break;

    case 'product':
        break;

    case 'login':
        $titleSuffix = ' | Home';
        include_once "/Users/rizot/Documents/GitHub/GameBase/Templates/GameBase_Homepage.php";
        break;

    case 'logout':
        $titleSuffix = ' | Home';
        include_once "/Users/rizot/Documents/GitHub/GameBase/Templates/GameBase_Homepage.php";
        break;

    case 'register':
        $titleSuffix = ' | Home';
        include_once "/Users/rizot/Documents/GitHub/GameBase/Templates/GameBase_Homepage.php";
        break;

    case 'contact':
        $titleSuffix = ' | Home';
        include_once "/Users/rizot/Documents/GitHub/GameBase/Templates/GameBase_Homepage.php";
        break;

    case 'admin':
        include_once ('admin.php');
        break;

    case 'member':
        include_once ('member.php');
        break;

    default:
        $titleSuffix = ' | Home';
        include_once "/Users/rizot/Documents/GitHub/GameBase/Templates/GameBase_Homepage.php";
}







