You can use the complex syntax to put the value of both object properties AND object methods inside a string.  For example...
<?php
class Test {
    public $one = 1;
    public function two() {
        return 2;
    }
}
$test = new Test();
echo "foo {$test->one} bar {$test->two()}";
?>
Will output "foo 1 bar 2".

However, you cannot do this for all values in your namespace.  Class constants and static properties/methods will not work because the complex syntax looks for the '$'.
<?php
class Test {
    const ONE = 1;
}
echo "foo {Test::ONE} bar";
?>
This will output "foo {Test::one} bar".  Constants and static properties require you to break up the string.

https://www.php.net/manual/pt_BR/language.types.string.php#example-52
