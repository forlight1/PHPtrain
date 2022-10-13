<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sw statemanets</title>
</head>
<body>
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

</body>
</html>