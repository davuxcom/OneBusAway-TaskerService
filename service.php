<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
// echo $_GET["id"];
$contents = file_get_contents("http://pugetsound.onebusaway.org/where/text/stop.action?id=" . $_GET["id"]);
// echo $contents;

preg_match_all("#<tr class=\"arrivalsRow\">.*?<a.*?>(.*?)</a>.*?<td .*?>(.*?)</td>.*?<div .*?>(.*?)</div>.*?<span .*?>(.*?)</span>.*?<span .*?>(.*?)</span>.*?</tr>#si", $contents, $matches);

for ($i=0; $i < sizeof($matches[1]); $i++) {
	
	$x = $matches[1][$i] . "," . $matches[2][$i] . "," .$matches[3][$i] . "," . $matches[5][$i] . "|\n";
	echo  $x;  
}
// echo "522E,30,WOODINVILLE,scheduled departure|";

echo "None , , ,|";
echo " , , ,|";
echo " , , ,|";
echo " , , ,|";
echo " , , ,|";
echo " , , ,|";
echo " , , ,|";
echo " , , ,|";
echo " , , ,|";
echo " , , ,|";
// print_r($matches);


?>

