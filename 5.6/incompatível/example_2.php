<?php

// A função lista mudou alfuns comportamentos

/**
 *  A função list() não faz mais atribuições em ordem reversa
 *
 * A função list() agora irá atribuir valores as variáveis na ordem em que foram definidas,
 * em vez de ordem reversa. De modo geral, isso só afeta casos onde a função list()
 *
 * é utilizada em conjunção com o operador de array [], como mostrado a seguir:
 */


list($a[], $a[], $a[]) = [1, 2, 3];
var_dump($a);

/*
  O exemplo acima irá imprimir no PHP 5:

  array(3) {
   [0]=> int(3)
   [1]=> int(2)
   [2]=> int(1)
  }

*/

/*
  O exemplo acima irá imprimir no PHP 7:

  array(3) {
   [0]=> int(1)
   [1]=> int(2)
   [2]=> int(3)
  }

*/

/** Atribuições de list() vazias foram removidas */

list() = $a;
list(,,) = $a;
list($x, list(), $y) = $a;

