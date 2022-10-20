<?php
$title = 'whileloop';
include 'header/header.php'; ?>
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
 <?php require 'header/footer.php';?>
</body>
</html>