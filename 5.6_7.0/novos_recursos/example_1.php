<?php

// Declarações de tipos escalares

/*

 Declarações de tipos escalares vêm em dois sabores: coercivo (padrão) e estrito.
 Para parâmetros os seguintes tipos agora podem ser forçados (tanto coercivamente quanto estritamente):

 strings (string),
 inteiros (int),
 números de ponto flutuante (float) e booleanos (bool).

 Eles incrementam os outros tipos introduzidos no PHP 5: nomes de classe, interfaces, array e callable.

 */

// Modo coercivo
function sumOfInts(int ...$ints)
{
    return array_sum($ints);
}

var_dump(sumOfInts(2, '3', 4.1));

//O exemplo acima irá imprimir:

//int(9)
