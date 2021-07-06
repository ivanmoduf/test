<?php
$arr = array(0, 2, 5, 7, 1);
$result = findmax($arr);
echo $result;
function findmax($array) {
  $max = 0;
  $a = count($array);
  for ($counter = 0; $counter < $a; $counter++) {
    if ($array[$counter] > $max) {
      $max = $array[$counter];
    }
  }
  return $max;
}
