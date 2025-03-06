<?php

# phpinfo();

$a_bool = true;   // a bool
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an int
echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_str), "\n";
echo get_debug_type($a_str2), "\n";
echo get_debug_type($an_int), "\n";

// 如果是整型，就加上 4
if (is_int($an_int)) {
    $an_int += 4;
}
var_dump($an_int);

// 如果 $a_bool 是字符串，就打印出来
if (is_string($a_bool)) {
    echo "String: $a_bool";
}