

<?php
include ('assign2_static.html');
$html = file('assign2_static.html');

function getTitle($html){
/*This should get the title of the page*/
$title = preg_grep('*title*', $html);
}
function getBody($html){
/*This should get the body of the page*/
$body = preg_grep('*body*', $html);
}
/*
String Concatenation to put the title and body text returned from
your functions into a generic HTML document format (IE: Everything outside
the <body> tag could be coded as part of the PHP print out statements
 while the body and title functions results are joined into that string
 as it it printed out)
*/
 ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <?php $title ?>
   <link rel="stylesheet" href="aux/default.css">
 </head>
 <?php $body ?>
 </html>
