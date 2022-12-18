I though that it would be helpful to add this comment so that the information at least appears on the right page on the PHP site.

Note that if you intend to use a double-quoted string with an associative key, you may run into the T_ENCAPSED_AND_WHITESPACE error. Some regard this as one of the less obvious error messages.

An expression such as:

<?php
    $fruit=array(
        'a'=>'apple',
        'b'=>'banana',
        //    etc
    );

    print "This is a $fruit['a']";    //    T_ENCAPSED_AND_WHITESPACE
?>

will definitely fall to pieces.

You can resolve it as follows:

<?php
    print "This is a $fruit[a]";    //    unquote the key
    print "This is a ${fruit['a']}";    //    Complex Syntax
    print "This is a {$fruit['a']}";    //    Complex Syntax variation
?>

I have a personal preference for the last variation as it is more natural and closer to what the expression would be like outside the string.

It’s not clear (to me, at least) why PHP misinterprets the single quote inside the expression but I imagine that it has something to do with the fact quotes are not part of the value string — once the string is already being parsed the quotes just get in the way … ?

https://www.php.net/manual/pt_BR/language.types.string.php#example-52
