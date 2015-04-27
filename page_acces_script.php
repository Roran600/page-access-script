<?php
// napis stranky do zoznamu -premennej-$stranky
$stranky = array(
	'http://www.youtube.com/`,
	'http://www.google.com/`,
	'http://www.github.com/`,
	);

// uloz si pocet stranok
$pocet_stranok = count($stranky);

// vyber nahodne cislo medzi 0 a poctom poloziek v premennej $stranky
$nahodne_cislo = rand(0,$pocet_stranok-1);

// do premennej $homepage nacitaj obsah stranky
$homepage = file_get_contents( $stranky[$nahodne_cislo] );
echo $homepage;
?>
