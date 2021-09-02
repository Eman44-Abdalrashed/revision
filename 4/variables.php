<?php
//global variables
$name ="eman";
//local varibale
function add(){
    $x = 10;
    $y = 20;
    $z = $x *$y;
    echo $z;
}
add();
//function with parameter
function add2($x){
    $z =10 +$x;
    echo "</br>".$z;
}
add2(10);
//static variable
function add3(){
    static $y =1;
    $y++;
    echo "</br>".$y;
}
add3();
add3();

//super global varibale
//$_SET $_GIT $_SESSION $_COOKIES .......

//variable variables
$name ="Eman";
$$name ="Eman Abdalrashed";
echo "</br>".$Eman."</br>";

//constants
define('PI',3.14);
echo PI;

//operators
// + - / * %
$sum = 2 + 5 * 4 / 2;
echo "</br>".$sum;

//assignment
//= += -= *= /= .= %=
$num1 =10;
$num1 %=3;
echo "</br>".$num1;

//increment preincrement
$num2 = 5;
$num2 ++;  //$num2 = 6;
echo "<br>".$num2 ++; // print 6 but the value of $num2 after print is 7
echo "<br>".$num2;  // $num2 =7
echo "<br>".++$num2; //print 8

// postincrement
$num3 =4;
--$num3; //value of num3 =3
echo "<br>".$num3; //print 3
echo "<br>".$num3--; //print 3 but value become 2
echo "<br>".$num3; //print 2

//decrement
$num4 = 8;
$num4 --;
echo "<br>".$num4;

//logical operators
// and && or || not ! xor
$a =1;
$b =0;
echo "<br>".($a && $b);
echo "<br>".($a || $b);
echo "<br>".(!$b);
echo "<br>".($a XOR $b);

//equality operators = == === !==
$a = '4';
echo "<br>".$a == 4 ;
echo "<br>".($a != 4);
echo "<br>".$a === 4;
echo "<br>".($a !== 4);

//comparision
// < > <= >=
$a =5;
$b =8;
echo "<br>".($a > $b);
echo "<br>".($a < $b);
echo "<br>".($a >= $b);
echo "<br>".($a <= $b);