<?php

function getDistance($lat1, $long1, $lat2, $long2)
{
		$earth = 6371; //km 
		//$earth = 3960; //miles

		//Point 1 cords
		$lat1 = deg2rad($lat1);
		$long1= deg2rad($long1);

		//Point 2 cords
		// deg2rad Convierte el número en grados a su equivalente en radianes
		$lat2 = deg2rad($lat2);
		$long2= deg2rad($long2);

        //Formula
        $dlong=$long2-$long1;
        $dlat=$lat2-$lat1;
        //sin() devuelve el seno del parámetro 
        $sinlat=sin($dlat/2);
        $sinlong=sin($dlong/2);

        //cos() devuelve el coseno del parámetro 
        $a=($sinlat*$sinlat)+cos($lat1)*cos($lat2)*($sinlong*$sinlong);
        //Devuelve el arco seno de arg en radianes,  min() devuelve el valor más bajo de ese array, sqrt es raíz cuadrada
        $c=2*asin(min(1,sqrt($a)));
        //round Redondea un float
        $d=round($earth*$c);

return $d;

}

echo "Distance in km from CB2 to SS4: ".getDistance(19.3939950917454, -99.06999009682619, 19.3878893, -99.17448709999996);
?>