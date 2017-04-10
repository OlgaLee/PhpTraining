<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
   print_r(($value = $value*$value).',');
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element
?>