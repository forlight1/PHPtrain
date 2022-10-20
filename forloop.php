<?php
$title = 'forloop';
include 'header/header.php'; ?>
    <?php
        for($count=0; $count < 19; $count++){
            echo '<p>Hello you</p>';
        }

        for($count = 0; $count < 10; $count++){
            echo "<p>the count is: $count</p>";
        }

    ?>
    <?php require 'header/footer.php';?>
</body>
</html>