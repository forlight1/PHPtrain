<?php
$title = 'stringmanip';
include 'header/header.php'; ?>
    <?php
        echo '<hr>';
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "pol piatek";
        echo $phrase1 . ",named Tiff " . $phrase2;
        echo '<br/>';
        echo '</hr>';
        echo 'repest string' . strtoupper(str_repeat('a',10)).'<br/>';

        echo 'Upper first letter:' . ucfirst($name).'<br/>';
        echo 'Upper first letter of each word:' . ucwords($name).'<br/>';
        echo 'Upper case:'. strtoupper($name).'<br/>';
        echo 'Lowerr case:'. strtolower("THIS WAS UPPER").'<br/>';
        echo 'Get a substring:'. substr($name, 5, 10).'<br/>';
        echo 'Get a position in string:'. strpos($name, 'a').'<br/>';
        echo 'Find charakter e:'. strchr($name, 'e').'<br/>';

    ?>
<?php require 'header/footer.php';?>
</body>
</html>