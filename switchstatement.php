<?php
$title = 'switch statement';
 include 'header/header.php'; ?>
    <h1>SW statements</h1>
    <?php
        $grade = 'C';

        switch($grade){
        case 'A':
            echo '<h2>you are seuper</h2>';
            break;
        case 'B':
            echo '<h2>you did well</h2>';
            break;
        default: 
            echo '<h2>you have faild</h2>';
            break;
        }


    ?>
<?php require 'header/footer.php';?>
</body>
</html>