<?php 
$title = 'ifstatement';
include 'header/header.php'; ?>
    <?php

echo '<h2>if statement</h2>';
$grade = 30;

if($grade >= 50) {
    echo '<h3 style="color: green"> you have passed</h3>';
}
else {
    echo '<h3 style="color: green"> you have faild</h3>';
}
$grade = 'C';
if($grade == 'A'){
    echo '<h2> you are super </h2>';
}
elseif ($grade == 'B'){
    echo '<h2> you did well </h2>';
}
else{
    echo '<h2> you have faild </h2>';
}

    ?>
    <?php require 'header/footer.php';?>
</body>
</html>