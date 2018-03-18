--TEST--
??? - chaining with ??
--FILE--
<?php
function dual($on, $off = null) {
    if ($on)
        throw new \Exception("dual");
    else
        return $off;
}

var_dump(dual(true) ??? 'a');

var_dump(dual(true) ??? 'b' ?? 'c');
var_dump(dual(true) ??? null ?? 'd');
var_dump(dual(false) ??? 'e' ?? 'f');
var_dump(dual(false) ??? null ?? 'g');

var_dump(dual(false, true) ??? 'h' ?? 'i');
var_dump(dual(false, true) ??? null ?? 'j');
?>
--EXPECT--
string(1) "a"
string(1) "b"
string(1) "d"
string(1) "f"
string(1) "g"
bool(true)
bool(true)
