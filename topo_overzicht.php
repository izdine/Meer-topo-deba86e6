<?php
echo " Hoeveel landen ga je toevoegen? ";

$a = readline();
$topo = array();

if (!is_numeric($a)) {
exit ($a . " is geen geldige getal, probeer het opnieuw ");
}

for ($i=0; $i < $a ; $i++) {
    echo "Welk land wil je toevoegen?";
    $topo[$b = readline()] = $c = readline(" Wat is de hoofdstad van " . $b . "?");
}
    echo " De volgende landen en steden zitten in de database " . PHP_EOL;
foreach ($topo as $key => $value) {
  echo $key . "," . $value;
}

 ?>
