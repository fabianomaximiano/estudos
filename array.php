<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	//$array = array(
		//"foo" => "bar",
		//"bar" => "foo",

	//);
	
	$foo = [

		"foo" => "bar",
		"bar" => "foo",

	];

	$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
    2 => "d",
    3 => "f",
);
	$exe2 = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
	//echo "<br>";
	$clubes = array(
		"Clubes SP" => array(
			"E.C Corinthians Paulista","Santos", "São Paulo", "Palmeiras"
			), 
		"Clubes RJ" =>array(
			"Flamengo", "Vasco", "Botafogo", "Fluminense"
			), 
		"Clubes MG"=>array(
			"Cruzeiro", "Atletico"
			),
		"Clubes  PR" => array(
			"Coritiba", "Athletico Paranaense"
			),
		"Clubes RS " => array(

			"Internacional", "Gremio"
			)

		);

	print_r($clubes["Clubes SP"][1]);
	echo "<br><hr>";
	print_r($array);
	echo "<br><hr>";
	print_r($array[1]);
	echo "<br><hr>";
	var_dump($exe2)
	?>	
</body>
</html>