<?php
//if condation
$color = 'red';
if($color == 'red'){
    echo 'color is red';
}else{
    echo 'color is '. $color;
}

// elseif
if($color=='blue'){
    echo 'welcome';
}elseif($color=='red'){
    echo ' red';
}else{
    echo ' no color';
}

// switch
$speed = 200;
switch($speed){
    case 100:
        echo ' speed is normal';
        break;

    case 150:
        echo ' speed is fast';
        break;

    case 200:
        echo ' speed is very fast';
        break;

    default:
    echo ' no speed';
}

//loops 
// while loop
$num = 10;
while($num >=1){
    echo '<p>number is'.$num.'</p>';
    $num--;
}

//do while
$student = 5;
do{
    echo '<p>student'.$student.'</p>';
    $student++;
}while($student<=10);

//for loop
for($stu =1; $stu <=10; $stu++){
    if($stu <=5){
        echo '<p> stu'.$stu.'</p>';
    }else{
    echo '<p>'.$stu.'</p>';
    }
}