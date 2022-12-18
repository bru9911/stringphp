<?php
$fruits = array ( "frutas"  => array ( "a" => "laranja",
                                       "b" => "banana",
                                       "c" => "maçã",
                                     ),
                  "numeros" => array ( 1,
                                       2,
                                       3,
                                       4,
                                       5,
                                       6
                                     ),
                  "buracos" => array (      "primeiro",
                                       5 => "segundo",
                                            "terceiro",
                                     ),
                );

// Alguns exemplo de endereços dos valores do array acima
echo $fruits["buracos"][5];   // prints "segundo"
echo $fruits["frutas"]["a"];  // prints "laranja"
unset($fruits["buracos"][0]); // remove "primeiro"

// Criando um novo array multidimensional
$sucos["maca"]["verde"] = "bom";
?>

Atribuições de array sempre envolvem cópias de valores. Use o operador de referência para copiar um array por referência.

<?php
$arr1 = array(2, 3);
$arr2 = $arr1;
$arr2[] = 4; // $arr2 é modificado,
             // $arr1 continua sendo apenas array(2, 3)

$arr3 = &$arr1;
$arr3[] = 4; // agora $arr1 e $arr3 sao os mesmos
?>

https://www.php.net/manual/pt_BR/language.types.array.php#example-58
