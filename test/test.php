<?php
$someString = "bla bla bla";
$array = array(3,2,2,2);

$dumb = "prefix ". implode("", $array);

echo "this is string and variable at same time $someString\n";
echo "this is string and variable at same time $array[0]\n";
echo $dumb;
var_dump($dumb);
gettype($dumb);


function convert_multi_array($array) {
  $out = implode("&",array_map(function($a) {return implode(" ",$a);},$array));
  print_r($out);
}


$arr = array(array("blue", "red", "green"), array("one", "three", "twenty"));
$child_arr = $arr[0];
var_dump($child_arr);
var_dump($child_arr[0]);
convert_multi_array($arr);

// $string = "This is a test string.";
// $needle = "a";
// $left_string = strstr($string, $needle, true);
// var_dump($left_string);

$string = "This is a test string.";
$needle = "a";
$string_array = explode($needle, $string);
$left_string = rtrim($string_array[0], " ");
var_dump("\n");
var_dump(strpos("portSekolah", "asdf"));