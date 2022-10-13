<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php primer if statements</title>
</head>
<body>
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
</body>
</html>