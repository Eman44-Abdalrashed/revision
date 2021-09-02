<?php
// echo print printf sprintf

echo "welcome to my website";//return string 
print ('  eman');//return string 
printf(' abdalrashed');//return string 
echo sprintf(' alsaid');//return 
$str ='welcome to my website %s';
echo "<br>".sprintf($str,' eman <br>');
//===================================
//strings
// \n \\ \t \r
$str = " welcome \n eman";
echo $str;
echo " welcome \" eman";
echo ' welcome " eman';

//===============
echo <<<MYTEXT
 welcome to my website
MYTEXT;