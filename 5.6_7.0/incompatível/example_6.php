<?php

// Parênteses em torno de parâmetros de função não afetam mais seu comportamento

function getArray() {
    return [1, 2, 3];
}

function squareArray(array &$a) {
    foreach ($a as &$v) {
        $v **= 2;
    }
}

// Generates a warning in PHP 7.
squareArray((getArray()));

// O exemplo acima irá imprimir:


// Notice: Only variables should be passed by reference in /tmp/test.php on line 13


// VERIFICAR