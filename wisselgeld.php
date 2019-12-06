<?php

$inputbedrag = readline("Bedrag: ");
define ("GELDEENHEDEN" ,array(50, 20, 10, 5, 2, 1));
define ("CENTEN", array(50, 20, 10, 5));
$restbedrag = floatval($inputbedrag);
$bedrag = floor($restbedrag);
$centen = $restbedrag - $bedrag;
$centen = $centen * 100;
$centen = round($centen / 5) * 5;
foreach (GELDEENHEDEN as $key => $value) {
    
    if ($restbedrag >= $value){
        $geldeenheidinrestbedrag = $restbedrag / $value;
        $restbedrag = $restbedrag % $value;
        print(floor($geldeenheidinrestbedrag) . " keer " . $value . " Euro " . PHP_EOL);
    }
}
$totaalcenten = $centen;
foreach (CENTEN as $key => $value) {
    
    if ($totaalcenten >= $value){
        $centeenheidinrestbedrag = $totaalcenten / $value;
        $totaalcenten = $totaalcenten % $value;
	    print(floor($centeenheidinrestbedrag) . " keer " . $value . " Cent " . PHP_EOL);
        
        
    }
}
print("Rest:" . $restbedrag);