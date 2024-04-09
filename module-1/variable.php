<!-- declare variable with character  -->
<!-- <?php
$number=5;
echo $x
?> -->

<!-- declare a variable with underscore and character -->
<!-- <?php
$_number=5;
echo $_number;
?> -->

<!-- invalid variable declaration -->
<!-- <?php
// $@%="can not declare variable with special character";
// echo $@%;
?> -->

<!-- invalid variable declaration -->
<!-- <?php
// $123="can not declare variable with number";
// echo $123
?> -->

<!-- assign variable by value  -->
<!-- <?php
$numberX=10;
$numberY =$numberX;
echo $numberX;
?> -->

<!-- assign variable by reference -->
<!-- <?php 
$numberX=10;
$numberY=&$numberX; //& and is used to refer the value of x when x value update y get the updated value immediately
$numberX=20;
echo $numberY
?> -->

<!-- string concatenation with .  -->
<!-- <?php
$firstName="Anik";
echo "Hello " .$firstName; 
?> -->

<!-- embeded php in html  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
        echo "Hellow world"
        ?>
    </h1>
    <h1>
        <?=
        "Hellow world" //shorthand version of <?php echo "Hellow World?/>
        ?>
    </h1>
    <p>
        <?php 
        $x = 10;
        ?>
    </p>
</body>
</html>