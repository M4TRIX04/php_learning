<?php
	$products = array('Tires', 'Oil', 'Spark Plugs');
	$products[3] = 'Fuses';
	#$out =  `ls -la`;
	#echo '<pre> '.$out.'</pre>'

	foreach ($products as $current){
		echo $current."<br>";
	}

	$prices = array( 'Tires' => 100, 'Oil' => 10, 'Spark Plugs' => 4 );

	while ($element = each($prices)) {
	echo $element['key'];
	echo " - ";
	echo $element['value'];
	echo "<br />";
	}

	reset ($prices);
	while (list($product, $price) = each($prices)){
		echo "$product - $price - $prices<br />";
	}
?>
