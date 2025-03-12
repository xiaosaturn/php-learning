<?php

$array = array(
    "a" => "A",
    "b" => "B",
);
var_dump($array);

echo '<br>';
echo '<div style="color:red">你好</div>';

$array2 = [
    "a" => "A",
    "b" => "B",
];
var_dump($array2);

echo '<br>';

# 没有键名的数组
$array3 = array("abc", "def", "ghi", "jkl");
var_dump($array3);

echo '<br>';

# 访问数组单元
$array4 = array(
    "foo" => "bar",
    42 => 22,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);
var_dump($array4["foo"]);
var_dump($array4["multi"]["dimensional"]["array"]);

echo '<br>';

# 数组解引用
function getArray() {
    return array(1, 2, 3);
}
$secondElement = getArray()[1];
var_dump($secondElement);

echo '<br>';

# 用方括号的语法新建/修改
$array5 = array(1, 2, 3);
print_r($array5);
foreach ($array5 as $key => $value) {
    unset($array5[$key]);
}
echo '<br>';
print_r($array5);
$array5[] = 6;
print_r($array5);

// 重新索引
$array5 = array_values($array5);
$array5[] = 7;
print_r($array5);

echo '<br>';

# 数组解包
$source_array = ["foo", "bar", "baz"];
[$foo, $bar, $baz] = $source_array;
echo $foo;
echo $bar;
echo $baz;

