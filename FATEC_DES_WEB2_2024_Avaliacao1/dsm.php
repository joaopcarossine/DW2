<?php

// transformando txt em página PHP, file_get_contents lê o txt e transforma na variável txt

$titulo = 'Solicitações DSM';
$txt = 'DSM.txt';

echo "<h2>" . $titulo . "</h2>";
echo "<pre>" . file_get_contents($txt) . "</pre>";
?>
