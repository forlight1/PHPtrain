<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while/do while</title>
</head>
<body>
<h1>while loop</h1>
    <?php
    $grade = 10;
    while($grade < 10){
        echo '<p> less then 10!</p>';
        $grade++;
    }
    echo 'exitloop';
    ?>
 <h1> do while loop</h1>   
 <?php
    do{
        echo '<p> I am making do loop!</p>'; 
        $grade++;
    }while($grade < 10);
 ?>
</body>
</html>