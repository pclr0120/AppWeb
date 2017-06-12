
	
	<?php
	//dfsdfsdfsd
	
try{

$json_file = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Los mochis PR&APPID=354151bca146c7630c957b7ed80bdd4b');

$vars = json_decode($json_file);
$cond = $vars->main;
$humedad=$cond->humidity;
$tem_min=$cond->temp_min-273.15;
$tem_max=$cond->temp_max- 273.15;
$name=$vars->name;
$temp_c = $cond->temp - 273.15;
$temp_f = 1.8 * ($cond->temp - 273.15) + 32;
//echo $name;
$weather = $vars->weather;
$icon = $weather[0]->icon;
$cadena="Temp C: ".$temp_c."ºC".""."- Min: ".$tem_min."ºC"." "." +Max: ".$tem_max."ºC"." ";;
//echo '<img src="http://openweathermap.org/img/w/'.$icon.'.png">'."<br/> \n";
//echo "Temp C: ".$temp_c."ºC"."<br/> \n";
//echo "Temperatura Minima: ".$tem_min."ºC"."<br/> \n";
//echo "Temperatura Maxima: ".$tem_max."ºC"."<br/> \n";
//echo "Temp F: ".$temp_f."ºC"."<br/> \n";
//echo "Humedad: ".$humedad."ºF"."<br/> \n";
echo $cadena;
}catch (Exception $e) {

	echo "Error";
}
?>
