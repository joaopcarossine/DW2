<?php

// função que junta os dois TXTs

function JuntarTXT($txt, $titulo) {
        echo "<h2>" . $titulo . "</h2>";
        echo "<pre>" . file_get_contents($txt) . "</pre>";
  
}

JuntarTXT('DSM.txt', 'Solicitações DSM');
JuntarTXT('GE.txt', 'Solicitações GE');
?>
