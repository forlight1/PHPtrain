<?php 
$title = 'functions';
include 'header/header.php'; ?>
    <?php
        function writeMessage(){
            echo "you are really nice <br/>";
        }
        writeMessage();
        echo "<hr/>";
        writeMessage();

        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum<br/>";

        }
        function changeNum(&$num){
            $num = $num +10;
        }    

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }


        $num = 500;
        addFunction(10, 20);

        changeNum($num );
        echo $num . '<br/>';
        addFunction($num, 10);

        $return_value = returnProduct(10, 200);
        echo $return_value . '<br/';
    ?>
    <?php require 'header/footer.php';?>
</body>
</html>