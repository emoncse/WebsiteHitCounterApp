<?php

function HitCounter(){
  $TextFile = fopen("visitor-hit-counter.txt", "r");
  $HitValue = (int) fread ($TextFile,20) ;
  fclose ($TextFile) ;
  
  $HitValue++ ;
  echo $HitValue ;
  $TextFile = fopen("visitor-hit-counter.txt", "w" ) ;
  fwrite($TextFile,$HitValue) ;
  fclose ($TextFile) ;
 }
?>
