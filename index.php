<!DocTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    $name = "Dong";
    $age = 20;
    $course = array("JAVA", "PHP", "HTML", "CSS", "JavaScript");
    echo     "Name:" . $name . ", age:" . $age .
             "<br>3rd courses is " . $course[2];
    $x = 10;
    $y = 11;
    echo "x: " . $x . "<br>";
    echo "y: " . $y . "<br>";
    echo "x/y: " . ($x/$y) . "<br>";
    echo "x%y: " . ($x%$y) . "<br>";
    echo "x++: " . ($x++) . "<br>";
    echo "++y: " . (++$y) . "<br>";
    ?>
</body>
</html>
