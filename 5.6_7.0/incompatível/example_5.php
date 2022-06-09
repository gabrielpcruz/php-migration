<?php


/** foreach não modifica mais o ponteiro interno do array */

$array = [0, 1, 2];
foreach ($array as &$val) {
    var_dump(current($array));
}

/*
    O exemplo acima irá imprimir no PHP 5:

    int(1)
    int(2)
    bool(false)

    O exemplo acima irá imprimir no PHP 7:

    int(0)
    int(0)
    int(0)
*/

// ACHO QUE NAO FAZEMOS ESSA VERIFICAÇÃO