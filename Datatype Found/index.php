<!DOCTYPE html>
<html>
<head>
	<title>First Program</title>
</head>
<body>
<?php
	// echo "Temp";
	$xyz = 5;
	$y = 10;
	
	echo $xyz+$y;

//	function isCheck()
//	{
//		echo $y;
//	}
//	isCheck();

//To check the data type use var_dump;
	function checkDatatype($a){
		var_dump($a);
	}
checkDatatype($xyz);
checkDatatype($y);

?>

</body>
</html>
