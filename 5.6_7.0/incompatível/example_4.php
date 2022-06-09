<?php

// Foreach por valor opera em uma cópia do array

/*
 Quando usado no modo padrão, por valor, o foreach vai operar em uma cópia do array sendo iterado,
 ao invés do próprio array.

 Isso significa que mudanças feitas durante a iteração do array, não afetarão os valores iterados.
*/

/* Melhora no comporatamento da iteração por referência com foreach

Quanto iterado por referencia, o foreach fará um melhor trabalho de controlar as alterações feitas ao array durante a iteração.

Por exemplo, inclusões ao array enquanto iterado, agora resultam na inclusão de valores enquanto itera, como a seguir:
*/

$array = [0];
foreach ($array as &$val) {
    var_dump($val);
    $array[1] = 1;
}

/*
    O exemplo acima irá imprimir no PHP 5:

    int(0)

    O exemplo acima irá imprimir no PHP 7:

    int(0)
    int(1)

*/