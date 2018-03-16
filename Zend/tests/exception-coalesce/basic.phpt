--TEST--
??? - basic test for exception coalesce operator
--FILE--
<?php
echo "php\n" ??? "php is real";
echo foo() ??? "foo() does not exist\n";

function bar() { throw new Exception("bar"); }
echo bar() ??? "user generated exception\n";

function baz() { return "all ok"; }
echo baz() ??? "something is wrong here";
?>
--EXPECT--
php
foo() does not exist
user generated exception
all ok
