<?php

// Agrupamento de declarações use

/*
 Classes, funções e constantes importadas do mesmo namespace, agora podem ser agrupadas
 em uma única declaração use
 */

// Código anterior ao PHP 7
/*


use namespace\a\ClassA;
use namespace\a\ClassB;
use namespace\a\ClassC as C;

use function namespace\b\fn_a;
use function namespace\b\fn_b;
use function namespace\b\fn_c;

use const namespace\c\ConstA;
use const namespace\c\ConstB;
use const namespace\c\ConstC;

// Código do PHP 7+

use namespace\a\{ClassA, ClassB, ClassC as C};

use function namespace\b\{fn_a, fn_b, fn_c};

use const namespace\c\{ConstA, ConstB, ConstC};

*/