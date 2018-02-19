<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All score</title>
    <link href="stile.css" rel="stylesheet" href="/css/master.css">
  </head>
  <body>

    <?php

    //Here I use PHP variables for HTML
    $unlist="<ul>";
    $unlistclose="</ul>";
    $li="<li>";
    $lic="</li>";
    $labela="<label>";
    $labelc="</label>";
    $diva="<div>";
    $divc="</div>";
    $container="<div id=container>";
    $divAlternative="<div id=div1>";
    $divAlternative2="<div id=div2>";


    echo $container;

      echo $labela;
        echo "Game & Score<br/><br/>";
      echo $labelc;

          //Print all games and set variables maxscore and maxgame
          //for identify the best one
          echo $divAlternative;
           echo $unlist;
           //Thanks to $_SESSION I can use the data insert in the other pages
            foreach($_SESSION["registration"] as $game=>$score) {
              echo $li;
              echo $game." score ".$score."<br/>";
              echo $lic;
              $tot = $tot+$score;
                if($score>$maxscore) {
                  $maxscore = $score;
                  $maxgame = $game;
                }
            }
          echo $unlistclose;
          echo $divc;

      echo $divAlternative2;
          echo $labela;
            echo "<br/><br/>INFO<br/><br/>";
          echo $labelc;
          echo $labela;
            echo "Max Score<br/><br/>";
          echo $labelc;
          echo $maxgame."<br/>".$maxscore."<br/>";
      echo $divc;

  echo $divc;
    ?>
    
    <div>
      <br>
      <!--Link to go back-->
     <a href="registrato.php">Back</a>
    </div>
  </body>
</html>
