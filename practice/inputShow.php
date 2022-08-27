<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstarp Format</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <form method="POST">

            <label for="num1" class="form-label">First Player Number</label>
            <input type="password" name="num1" class="form-control w-75">

            <label for="num2" class="form-label">Second Player Number</label>
            <input type="password" name="num2" class="form-control w-75">

            <button class="btn btn-info" type="submit">Check</button>




        </form>

        <h1 id="result"> Result:  <?php 
        
        if(isset($_POST['num1'])){
            if($_POST['num1']){
                echo $_POST['num1'];
            }
        }
        
        
        
        
        ?></h1>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
</body>

</html>