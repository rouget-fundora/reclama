<?php

#var_dump(password_verify("usuario2", "$2y$10$XTODR2Ecx1bzEpeVk1JbYubFpuLKcjRw1cehp0E/EGXxHGU0NZD3u"));


error_reporting(E_ALL);
echo '<pre>';


$pw = 'mierda';
$h1 = trim(password_hash($pw, PASSWORD_BCRYPT, [12]));
#$h2 = password_hash($pw, PASSWORD_DEFAULT);
var_dump($pw, $h1);

// TEST
if (password_verify($pw, $h1)) echo PHP_EOL . "$pw == $h1";
#if (password_verify($pw, $h2)) echo PHP_EOL . "$pw == $h2";


?>
