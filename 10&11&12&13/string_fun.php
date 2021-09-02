<?php
$companyname = "EXO";
// echo $companyname . " learning Center";
$companyname .= " Learning";
echo $companyname;
echo "<br><hr>";
$companyname .= " Center";
echo $companyname;
echo "<br><hr>";
$companyname .= " the best courses company";
echo $companyname;
$str = "It is a long established fact that a reader will be distracted by the readable content of a page when looking.";
$str2 ="EXO Learning Center";
echo "<br><hr>";
/*====================================================================================*/
// string functions
//  1) strlen($string)
echo "<h3> strlen() </h3>";
echo strlen($str);
echo "<br><hr>";
/*====================================================================================*/
// 2) addcslaches($string, char)
echo "<h3>addcslashes()</h3>";
echo addcslashes("this is 'text'","t");
echo "<br><hr>";
/*====================================================================================*/
// 3) addslaches($string)
echo "<h3>addslaches()</h3>";
echo addslashes("this is 'text'");
echo "<br><hr>";
/*====================================================================================*/
// 4) chunk_split($string,length,end)
echo "<h3>chunck_split()</h3>";
echo chunk_split($str2,1,",");
echo "<br><hr>";
/*====================================================================================*/
// 5) explode(separator,$srtring,limit)
echo "<h3>explode()</h3>";
$arr = explode(" ",$str2);
print_r($arr);
echo "<br><hr>";
/*====================================================================================*/
// 6) implode(separator,$array)
$colors = array("red","green","blue","black");
echo "<h3>implode()</h3>";
echo implode(" ",$colors);
echo "<br><hr>";
/*====================================================================================*/
// 7) join(separator,$array)
echo "<h3>join()</h3>";
echo join("&",$colors);
echo "<br><hr>";
/*====================================================================================*/
// 8) trim($string)
echo "<h3> trim()</h3>";
$str3 = "                      eman                       ";
echo strlen(trim($str3));
echo "<br><hr>";
/*====================================================================================*/
// 9) ltrim($string)
echo "<h3>ltrim()</h3>";
echo strlen(ltrim($str3));
echo "<br><hr>";
/*====================================================================================*/
// 10) rtrim($string)
echo "<h3>rtrim()</h3>";
echo strlen(rtrim($str3));
echo "<br><hr>";
/*====================================================================================*/
// 11) nl2br()
echo "<h3>nl2br()</h3>";
echo nl2br("this is text\r\n this\r\n is new line");
echo "<br><hr>";
/*====================================================================================*/
// 12) str_repeate($string,times)
echo "<h3>str_repeate()</h3>";
echo str_repeat($str2,3);
echo "<br><hr>";
/*====================================================================================*/
// 13) str_repalce(find,replace,$string)
echo "<h3> str_replace()</h3>";
echo str_replace("Center","Solution",$str2);
echo "<br><hr>";
/*====================================================================================*/
// 14) str_shuffle($string)
echo "<h3>str_shuffle</h3>";
echo str_shuffle($str2);
echo "<br><hr>";
/*====================================================================================*/
// 15) str_split($string,length)
echo "<h3>str_split()</h3>";
print_r(str_split($str2,3));
echo "<br><hr>";
/*====================================================================================*/
// 16) str_word_count($string)
echo "<h3>str_word_count()</h3>";
echo str_word_count($str);
echo "<br><hr>";
/*====================================================================================*/
// 17) strtoupper()
echo "<h3>strtoupper</h3>";
echo strtoupper($str);
echo "<br><hr>";
/*====================================================================================*/
// 18) strtolower($string)
echo "<h3>strtolower</h3>";
echo strtolower($str);
echo "<br><hr>";
/*====================================================================================*/
// 19) substr($string,start,length)
echo "<h3>substr()</h3>";
echo substr($str2,2,6);
echo "<br><hr>";
/*====================================================================================*/
// 20) substr_count($string,substring,start,length)
$str4 = "EXO Learning EXO Center EXO";
echo "<h3>substr_count()</h3>";
echo substr_count($str4,"EXO",0);
echo "<br><hr>";
/*====================================================================================*/
// 21) substr_compare($string1,$string2,startpo,length,case)
echo "<h3>substr_compare()</h3>";
echo substr_compare("HI Mohammed","HI",0);
echo "<br><hr>";
/*====================================================================================*/
// 22) substr_replace($string,replace,start,length)
echo "<h3>substr_replace</h3>";
echo substr_replace($str2,"Solution",2,8);
echo "<br><hr>";
/*====================================================================================*/
// 23) parse_str()
echo "<h3>parse_str()</h3>";
parse_str("name=ahmed&age=22",$arr2);
echo "<pre>";
print_r($arr2);
echo "</pre>";
echo "<br><hr>";
/*====================================================================================*/
// 24) strstr($string,search,before_search)
echo "<h3> strstr()</h3>";
echo strstr($str2,"Learning",true);
echo "<br><hr>";
/*====================================================================================*/
// 25) stristr($string,search,before_search)
echo "<h3> stristr()</h3>";
echo stristr($str2,"learning");
echo "<br><hr>";
/*====================================================================================*/
// 26) strchr($string,search,before_search)
echo "<h3> strchr()</h3>";
echo strchr($str2,"Learning",);
echo "<br><hr>";
/*====================================================================================*/
// 27) strpos($string,find,start)
echo "<h3>strpos()</h3>";
echo $str4 . "<br>";
echo strpos($str4,"YAT",4);
echo "<br><hr>";
/*====================================================================================*/
// 28) stripos($string,find,start)
echo "<h3>stripos()</h3>";
echo $str4 . "<br>";
echo stripos($str4,"yat",4);
echo "<br><hr>";
/*====================================================================================*/
// 29) strrpos($string,find,start)
echo "<h3>strrpos()</h3>";
echo $str4 . "<br>";
echo strrpos($str4,"YAT");
echo "<br><hr>";
/*====================================================================================*/
// 30) sterev($string)
echo "<h3>strev()</h3>";
echo strrev($str2);
echo "<br><hr>";
/*====================================================================================*/
// 31) strcmp($string,$string)
echo "<h3>strcmp</h3>";
echo strcmp("HI Ahmed","HI");
echo "<br><hr>";
/*====================================================================================*/
// 32) strncmp($string,$string,length)
echo "<h3>strncmp</h3>";
echo strncmp("HI Ahmed","HI",4);
echo "<br><hr>";