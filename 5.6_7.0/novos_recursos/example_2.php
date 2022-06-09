<?php

// Declarações de tipo de retorno

/*

 O PHP 7 adiciona suporte a declarações de tipo de retorno.
 Similar às declarações de tipo de argumento as declarações de tipo de
 retorno especificam o tipo do valor que será retornado por uma função.

 Os mesmos tipos estão disponíveis para declarações de tipo de retorno assim como
 estão disponíveis para declarações de tipo de argumentos.

 */

function arraysSum(array ...$arrays): array
{
    return array_map(function(array $array): int {
        return array_sum($array);
    }, $arrays);
}

print_r(arraysSum([1,2,3], [4,5,6], [7,8,9]));


// O exemplo acima irá imprimir:

/*
Array
(
    [0] => 6
    [1] => 15
    [2] => 24
)
*/



