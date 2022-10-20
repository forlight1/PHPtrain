<?php
$title = 'home';

include 'header/header.php'; ?>
    <?php
    echo 'Hello nie word';
    echo '<br/>';
    echo 'next line';
    ?>
    <button>Click</button>
    <?php
        $name = 'Alex';
        $age = 23;
        echo '<br/>';
        echo '<h1> My name is: '.$name.' </h1>';
        echo 'My name is: '.$name.'';
        echo '<h1> My name is: '.$age.' </h1>';
        echo "My name is : $name"

     ?>
     <?php require 'header/footer.php';?>
</body>
</html>