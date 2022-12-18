<?php
$array = array(
    1    => 'a',
    '1'  => 'b', // o valor "a" será sobrescrito por "b"
    1.5  => 'c', // o valor "b" será sobrescrito por "c"
    -1 => 'd',
    '01'  => 'e', // não é uma string de inteiro e NÃO sobrescreve a chave 1
    '1.5' => 'f', // não é uma string de inteiro e NÃO sobrescreve a chave 1
    true => 'g', // o valor "c" será sobrescrito por "g"
    false => 'h',
    '' => 'i',
    null => 'j', // o valor "i" será sobrescrito por "j"
    'k',      // o valor "k" será alocado na chave 2. Isto porque é o maior inteiro após a chave 1
    2 => 'l', // o valor "k" será sobrescrito por "l"
);

var_dump($array);
?>

//output

array(7) {
  [1]=>
  string(1) "g"
  [-1]=>
  string(1) "d"
  ["01"]=>
  string(1) "e"
  ["1.5"]=>
  string(1) "f"
  [0]=>
  string(1) "h"
  [""]=>
  string(1) "j"
  [2]=>
  string(1) "l"
}

https://www.php.net/manual/pt_BR/language.types.array.php#example-58
