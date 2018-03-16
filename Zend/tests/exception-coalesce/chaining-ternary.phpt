--TEST--
??? - chaining with ?:
--FILE--
<?php
function dual($on, $off = false) {
    if ($on)
        throw new \Exception("dual");
    else
        return $off;
}

var_dump(dual(true) ??? 'a');

var_dump(dual(true) ??? true ? 'b' : 'c');
var_dump(dual(true) ??? false ? 'd' : 'e');
var_dump(dual(true) ??? true ?: 'f');
var_dump(dual(true) ??? false ?: 'g');

var_dump(dual(false) ??? true ? 'h' : 'i');
var_dump(dual(false) ??? false ? 'j' : 'k');
var_dump(dual(false) ??? true ?: 'l');
var_dump(dual(false) ??? false ?: 'm');

var_dump(dual(false, true) ??? true ? 'n' : 'o');
var_dump(dual(false, true) ??? false ? 'p' : 'q');
var_dump(dual(false, true) ??? true ?: 'r');
var_dump(dual(false, true) ??? false ?: 's');
?>
--EXPECT--
string(1) "a"
string(1) "b"
string(1) "e"
bool(true)
string(1) "g"
string(1) "i"
string(1) "k"
string(1) "l"
string(1) "m"
string(1) "n"
string(1) "p"
bool(true)
bool(true)
