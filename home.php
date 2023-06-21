<?php

$array = ['lastname', 'email', 'phone'];
var_dump(implode(",", $array)); // string(20) "lastname,email,phone"
printf("<br>");
// $array1 = ['aam', 'jjam', 'kathl'];
// var_dump(implode("`",$array1));
// printf("<br>");
// Empty string when using an empty array:
var_dump(implode('hello', [" ", " jitu"])); // string(0) ""
var_dump(implode('hi', []));
printf("<br>");
// The separator is optional:
var_dump(implode(['a', 'b', 'c'])); // string(3) "abc"
printf("<br>");

// explod

$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2
printf("<br>");

$data = "foo:*:1023:1000::/home/foo:/bin/sh";

list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass ; // *
echo $uid ; // 1023
printf("<br>");
echo $gecos ; // 1023
printf("<br>");
echo $home ; // 1023
