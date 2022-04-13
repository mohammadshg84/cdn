<?php

$str= 'RANGIN';

$arr= str_split($str);

$unq= array_unique($arr);

$x= count($unq);

for($i=0;$i<$x;$i++){
  for($j=0;$j<$x;$j++){
    for($k=0;$k<$x;$k++){
      echo $unq[$i], $unq[$j], $unq[$k], PHP_EOL;
      echo "<br>";
    }
  }
}

?>