<?php include_once ("/Users/rizot/Documents/Projects/GameBase/Modules/CatRetrieve.php");
global $br;
global $rc;
global $rpg;
global $sp;
global $sx;
global $info;
?>


<head>
    <link rel= "stylesheet" href="/Public/CSS/GameBase_Style.css">
</head>
    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid">
            <img class="nbLogo" src="/Public/Images/GameBase%20logo.png">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="nav class nLink">
                    <li class="nav-item">
                        <a class="nav-link nItem1 position-relative" aria-current="page" href="#" style= "color: white;">Home</a>
                    </li>
                    <li class="nav-item dropdown nItem2 position-relative">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorieën</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <?php foreach($br as $info) { ?>
                                <li><a class="dropdown-item ddItem" href="/Public/PHP%20Files/GameBase_Battle_Royale.php"><?php echo $info['name'] ?></a></li>
                            <?php  } ?>
                            <?php foreach($rc as $info) { ?>
                                <li><a class="dropdown-item ddItem" href="/Public/PHP%20Files/GameBase_Racing.php"><?php echo $info['name'] ?></a></li>
                            <?php } ?>
                            <?php foreach($rpg as $info) { ?>
                                <li><a class="dropdown-item ddItem" href="/Public/PHP%20Files/GameBase_RPG.php"><?php echo $info['name'] ?></a></li>
                            <?php } ?>
                            <?php foreach($sp as $info) { ?>
                                <li><a class="dropdown-item ddItem" href="/Public/PHP%20Files/GameBase_Sports.php"><?php echo $info['name'] ?></a></li>
                            <?php } ?>
                            <?php foreach($sx as $info) { ?>
                                <li><a class="dropdown-item ddItem" href="/Public/PHP%20Files/GameBase_Sandbox.php"><?php echo $info['name'] ?></a></li>
                            <?php } ?></div>
            </ul>
                    </li>
                    <li class="nav-item">
                <a class="nav-link nItem3 position-relative" href="/Public/PHP%20Files/GameBase_Register.php" style= "color: white;">Registreren</a>
                </li>
                <li class="nav-item">
                <a class="nav-link nItem4 position-relative" href="/Public/PHP%20Files/GameBase_Login.php" style= "color: white;" >Profiel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nItem5 position-relative" href="/Public/PHP%20Files/GameBase_Login.php" style= "color: white;">Contact</a>
                    </li>
        </div>
    </nav>



