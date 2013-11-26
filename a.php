<?php
$i = $_GET['i'];
if($i){
list($a, $b, $c, $d) = explode('.', $i);
echo $a * 256 * 256 * 256 + $b * 256 * 256 + $c * 256 + $d;
}else{
$p = $_GET['p'];
$p_bin = str_pad(decbin($p), 32, '0', STR_PAD_LEFT);
for($i = 4; $i >=1; $i--){
echo bindec(substr($p_bin, -$i * 8, 8));
if($i != 1){echo '.';
}
}


}
