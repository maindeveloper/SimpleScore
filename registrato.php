<!--session_start allow me to use the information in all pages-->
<?php
session_start();
$game=$_REQUEST["game"];
$score=$_REQUEST["score"];
$_SESSION["registration"][$game]+=$score;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration done</title>
    <link href="stile.css" rel="stylesheet" href="/css/master.css" />
  </head>
  <body>

    <?php

    $labela="<label>";
    $labelc="</label>";
    $diva="<div>";
    $divc="</div>";
    $container="<div id=container>";

    //Here I use PHP variables for HTML
    echo $container;
     echo $labela."GREAT, YOU'RE IN".$labelc;
      echo "<br/><br/>";
       echo $diva;
         print $game."<br>";
         print $_SESSION["registration"][$game];
       echo $divc;
     echo $divc;
     ?>

     <br>
     <div>
       <br>
       <!--Link to all score or for new score page-->
       <a href="formpunteggio.html">New score</a><br>
       <a href="listapunteggi.php">All score</a>
     </div>
  </body>
</html>
