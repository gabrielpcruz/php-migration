<?php

// Operador de coalescência nula

/*

 O operador de coalescência nula (??) foi adicionado como um truque sintático para
 o caso trivial de precisar usar um ternário em conjunto com a função isset().

 Ele retorna o primeiro operando se este existir e não for null; caso contrário retorna
 o segundo operando.

 */

// Obtém o valor de $_GET['user'] e retorna 'nobody'
// se ele não existir.
$username = $_GET['user'] ?? 'nobody';

// Isto equivale a:
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

// A coalescência pode ser encadeada: isto irá retornar o primeiro
// valor definido entre $_GET['user'], $_POST['user'] e 'nobody'.

$username = $_GET['user'] ?? $_POST['user'] ?? 'nobody';




