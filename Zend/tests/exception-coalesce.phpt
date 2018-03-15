--TEST--
??? - basic test for exception coalesce operator
--FILE--
<?php
echo "php" ??? "php is real\n";
echo foo() ??? "foo() does not exist\n";

function bar() { throw new Exception("bar"); }
echo bar() ??? "user generated exception\n";

function baz() { return "all ok"; }
echo baz() ??? "something is wrong here";
?>
--EXPECT--
php is real
foo() does not exist
user generated exception
all ok
