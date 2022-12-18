<?php
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);
?>

O exemplo acima irá imprimir:

string(3) "bar"
int(24)
string(3) "foo"


https://www.php.net/manual/pt_BR/language.types.array.php#example-58
