<?php


// Chamadas estáticas a métodos não estáticos


/*
Chamadas estáticas a métodos que não foram declarados como
static estão depreciados, e podem ser removidos no futuro.

*/

class foo {
    function bar() {
        echo 'Eu não sou estático!';
    }
}

foo::bar();


// O exemplo acima irá imprimir:

/*

Deprecated: Non-static method foo::bar() should not be called statically in - on line 8
I am not static!


*/
