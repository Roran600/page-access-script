<?php
// napis stranky do zoznamu -premenna-
$stranky = array(
	'http://www.youtube.com/`,
	'http://www.google.com/`,
	);

// uloz si pocet stranok
$pocet_stranok = count($stranky);

// vyber nahodne cislo medzi 0 a poctom poloziek v premennej $stranky
$nahodne_cislo = rand(0,$pocet_stranok-1);

// do premennej $homepage nacitaj obsah stranky
$homepage = file_get_contents( $stranky[$nahodne_cislo] );
echo $homepage;
// ping funkcia
function pingAddress($ip){
    $pingresult = shell_exec("start /b ping $ip -n 1");
    $dead = "Request timed out.";
    $deadoralive = strpos($dead, $pingresult);

    if ($deadoralive == false){
        echo "The IP address, $ip, is dead";
    } else {
        echo "The IP address, $ip, is alive";
    }

}
?>
