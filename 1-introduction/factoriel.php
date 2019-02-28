<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factoriel</title>
</head>
<body>

<form action="factoriel.php" method="GET">
  <p>Entrer un nombre  
        <input name="fact" type="text">
        <input  type="submit">
  </p>  
   
</form>
    <?php 
    if (isset($_GET["fact"])) {
        $number =$_GET["fact"];
        $fact=1;
        for ($i=2; $i <$number ; $i++) { 
            $fact=$fact*$i;
            echo $i;  
        }
        echo $fact;   
    }
    
    ?>
</body>
</html>