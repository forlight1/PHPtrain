<?php 
$title = 'array';
 include 'header/header.php'; ?>
    <h1>arrays</h1>
    <?php
        $num = 3;

        $numbers = array(0,1,2,3,4,5,6,7,8,9,10,50,43,45,234,4324,33);

        echo $numbers[5];
        $size = count($numbers);
        echo "<p>Numer sizes is : $size";

        for($count =0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
    ?>
    <?php require 'header/footer.php';?>
</body>
</html>