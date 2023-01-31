<?php
include_once("/Users/rizot/Documents/GitHub/GameBase/Modules/GameDisplay.php");
global $al;
global $cdm;
global $ft;
global $pg;
global $zr;
?>

<!DOCTYPE HTML>
    <head>
    <?php include_once('/Users/rizot/Documents/GitHub/GameBase/Templates/defaults/GameBase_Head.php'); ?>
    </head>
    <body>
<?php include_once('/Users/rizot/Documents/GitHub/GameBase/Templates/defaults/GameBase_Navbar.php'); ?>

        <h1 class= "text-light heading1 position-relative">Battle Royale</h1>
        <h5 class= "text-light text3 position-relative">Hier kan je alle Battle Royale games vinden, heb jij het in je om de rest te verslaan op het slagveld?</h5>

            <?php foreach ($al as $info) { ?>
           <a href="GameBase_Detail.php?id=' . $info['id'] . '" ><button type="button" class="btn btn-dark button2 position-relative"><h3 class= "text4 position-relative"><?php echo $info['name']; ?></h3></button></a>
           <?php } ?>
          <?php foreach ($cdm as $info) { ?>
           <a href="GameBase_Detail.php?id=' . $info['id'] . '" ><button type="button" class="btn btn-dark button3 position-relative"><h3 class= "text5 position-relative"><?php echo $info['name']; ?></h3></button></a>
          <?php } ?>
           <?php foreach ($ft as $info) { ?>
               <a href="GameBase_Detail.php?id=' . $info['id'] . '" ><button type="button" class="btn btn-dark button4 position-relative"><h3 class= "text6 position-relative"><?php echo $info['name']; ?></h3></button></a>
           <?php } ?>
           <?php foreach ($pg as $info) { ?>
               <a href="GameBase_Detail.php?id=' . $info['id'] . '" ><button type="button" class="btn btn-dark button5 position-relative"><h3 class= "text7 position-relative"><?php echo $info['name']; ?></h3></button></a>
           <?php } ?>
           <?php foreach ($zr as $info) { ?>
               <a href="GameBase_Detail.php?id=' . $info['id'] . '" ><button type="button" class="btn btn-dark button6 position-relative"><h3 class= "text8 position-relative"><?php echo $info['name']; ?></h3></button></a>
           <?php } ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

