--TEST--
??? - more complex expressions
--FILE--
<?php
function except() {
    throw new \Exception("dual");
}

var_dump((except() ?: false) ??? 'outer');
var_dump((expect() ??? 0) ?: 'inner');
// var_dump(($foo = function () { throw new Exception('foo'); })() ??? 'iffe'); // Will throw a ParseError
var_dump(call_user_func($foo = function () { throw new Exception('foo'); }) ??? 'iffe'); // Won't
?>
--EXPECT--
string(5) "outer"
string(5) "inner"
string(4) "iffe"
