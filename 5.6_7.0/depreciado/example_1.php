<?php

// Construtores ao estilo PHP 4

/*

Construtores ao estilo PHP 4 (métodos que têm o mesmo nome que a classe onde estão definidos)
estão depreciados, e será removido no futuro.

O PHP 7 emitirá E_DEPRECATED se um construtor do PHP 4 for o único construtor definido na classe.
Classes que implementam o método __construct() não são afetadas.

*/

class foo {
    function foo() {
        echo 'Eu sou um construtor';
    }
}


/*
    O exemplo acima irá imprimir:

    Deprecated: Methods with the same name
    as their class will not be constructors in a future version of PHP;
    foo has a deprecated constructor in example.php on line 16
 */

// TEM ISSO NO NUSOAP e FRAMEWORK
