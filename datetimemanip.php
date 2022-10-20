<?php
$title = 'date time';
include 'header/header.php'; ?>
    <?php
    $datenow = getdate();
    echo "todays date: <br/>";
    echo $datenow['mday'] .'<br/>';
    echo $datenow['mon'] .'<br/>';
    echo $datenow['year'] .'<br/>';

    echo "Todays date: " . $datenow['mon'] . '/' . $datenow['mday'] . '/' .  $datenow['year'];
    '<br/>';
    echo time();
    print date("m/d/y G.i:s<br>", time()) . '<br/>';
    print "today is: ";
    print date("j of F Y, \a\\t g.i a", time());
    ?>
    <?php require 'header/footer.php';?>
</body>
</html>