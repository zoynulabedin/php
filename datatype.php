<?php

/**
 * 
 * data type
 * 
 * Integer Int
 * Double /Float
 * Boolean
 * Null
 * String
 * Array
 * Object
 * Resource
 * 
 */

 /**
  * 
  * About printf
*/
// $firstName = "zoynul";
// $lastName = "abedin";
// $age      = 28;

// printf('my nae is %s %s . my age is %s',$firstName,$lastName,$age);


/**
 * 
 * Number + -
 * */

//  $number  = 12;
//   $number += 52;

//  echo $number;

/*
* operator
+ - * / $ = arithmatic operator
+= -= 
*/
// $a = 7;
// $x = $y = $a;

// echo $x,"\n",$y;
// $x =$y=5;

// echo $x,"\n",$y;

// $name = $otherName = "fullname";

// echo $name,"\n",$otherName;

//leap year condtions
// $year = 2012;

// if($year % 4==0 &&($year%100 || $year % 400)){
//   echo "{$year} is a leap year";
// }else{
//   echo "{$year} is not leap year";
// }

// ternary operator 
// $n = 13;
// if(12==$n){
//   echo "this is twelve";
// }else if(10==$n){
//   echo "this is ten";
// }else{
//   echo "this is number";
// }
// echo "\n";

// $numberInworld = 12==$n ? "Hello world" : "Hello pabna";

// echo $numberInworld;

// echo "\n";

// if($n%2==0){
//   echo "even number";
// }else{
//   echo "odd Number";
// }
// echo "\n";
// $number = $n%2==0 ? "even number" : "odd Number";

// echo $number;

// $n = 13;

// $r = $n%2;

// switch($r){
//   case 0:
//   echo "{$n} even number";
//   break;
//   default:
//   echo "{$n} is odd number";
// }
// echo "\n";

// $color = 'blue';

// switch($color){
//   case 'red':
//   echo ucwords ($color).' is my favorite color';
//   break;

// case 'green';
// echo ucwords ($color).' is my Most favorite color';
// break;
// case 'blue':
// echo ucwords ($color).' is my not favorite color';
// break;
// default:
// echo "it is a simple color";
// }

// $n = -4;

// $r = $n%2;

// switch(true){
//   case (0==$r && 0<$r):
//   echo "{$n} is positive even number";
//   break;
//   case(1==$r && 0<$r):
//   echo "{$n} is positive odd number";
//   break;
//   case(0==$r && $r<0):
//   echo "$n is negetive even number";
//   break;
//   case (-1==$r && 0>$r):
//   echo "$n is negetive odd number";
//   break;
//   default:
//   echo "$n is  number";
// }