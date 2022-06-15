<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Php Function</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1 class="fs-4 text-primary">Php Array</h1>


<?php
// $myArray = array( 1 , 2 ," pappu ","anika ");

// $myArrayLength = count($myArray);

// for($x=0; $x < $myArrayLength; $x++){
//     echo  $myArray[$x];
//     echo "<br>";
// }




$MySum = array(15,20,25,30);
$mysumLength = count($MySum);

$sum = 0;

for($i=0; $mysumLength; $i++){
	$sum =$MySum[$i] + $MySum[$i+1];
}
echo "sum is".$sum;


?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>