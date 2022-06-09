<?php

// set_exception_handler()

/**
 * Códigos que implementam um manipulador de exceção registrado com set_exception_handler()
 * usando a declaração de tipo Exception causará um erro fatal quando um objeto Error for lançado.
 * Se o manipulador precisa trabalhar com o PHP 5 e 7,
 * você deve remover a declaração de tipo do manipulador,
 * enquanto que o código a migrar para funcionar exclusivamente no PHP 7,
 * pode simplesmente trocar a declaração de tipo Exception por Throwable.
 */

// Código da era PHP 5 que não irá funcionar.
    //function handler(Exception $e) { ... }
    set_exception_handler('handler');

// Compatível com PHP 5 e 7.
    // function handler($e) { ... }

// Somente PHP 7.
    // function handler(Throwable $e) { ... }