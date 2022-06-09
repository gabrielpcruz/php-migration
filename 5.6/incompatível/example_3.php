<?php
/*
Chamadas de contextos incompatíveis foram removidas

Anteriormente depreciadas no PHP 5.6,
chamadas estáticas feitas a métodos não-estáticos com um contexto incompatível agora resultarão
no método chamado tendo uma variável $this indefinida e um aviso de depreciação será emitido.

*/


class A {
    public function test() { var_dump($this); }
}

// Nota: NÃO extende A
class B {
    public function callNonStaticMethodOfA() { A::test(); }
}

(new B)->callNonStaticMethodOfA();


// O exemplo acima irá imprimir no PHP 5:

/*
    Deprecated: Non-static method A::test() should not be called statically, assuming $this from incompatible context in /tmp/test.php on line 8
    object(B)#1 (0) {
    }

    O exemplo acima irá imprimir no PHP 7:

    Deprecated: Non-static method A::test() should not be called statically in /tmp/test.php on line 8

    Notice: Undefined variable: this in /tmp/test.php on line 3 NULL
 */