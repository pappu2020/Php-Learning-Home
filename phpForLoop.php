<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Php WhileLoop</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1 class="fs-4 text-primary">Php ForLoop</h1>
<p class="fs-5 text-info fst-italic">Multiplication table of 2</p>

<?php

// for($x=2;$x<=100;$x+=1){
//     if($x%2 == 0){
//         echo "The number is: $x <br>";
//     }
// }


//Multiplication Table:
for($x=1;$x<=10;$x++){
  echo "2 * ",$x," = ",2*$x,"<br>";
}

?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>