<?php
// napis stranky do zoznamu -premennej-$stranky
$stranky = array(
	'http://www.youtube.com`,
	'http://www.google.com`,
	'http://www.github.com`,
	);

// uloz si pocet stranok
$pocet_stranok = count($stranky);

// vyber nahodne cislo medzi 0 a poctom poloziek v premennej $stranky
$nahodne_cislo = rand(0,$pocet_stranok-1);

// do premennej $homepage nacitaj obsah stranky
$homepage = file_get_contents( $stranky[$nahodne_cislo] );
echo $homepage;

// ping funkcia
function pingAddress($ip) {
    $pingresult = exec("/bin/ping -n 3 $ip", $outcome, $status);
    if (0 == $status) {
        $status = "alive";
    } else {
        $status = "dead";
    }
    echo "The IP address, $ip, is  ".$status;
}

//http://stackoverflow.com/questions/8030789/pinging-an-ip-address-using-php-and-echoing-the-result
pingAddress("127.0.0.1");

?>
