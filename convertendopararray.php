<?php

class A {
    private $B;
    protected $C;
    public $D;
    function __construct()
    {
        $this->{1} = null;
    }
}

var_export((array) new A());
?>

https://www.php.net/manual/pt_BR/language.types.array.php#example-58
