--TEST--
??? - do not absorb errors/warnings
--FILE--
<?php var_dump((1/0) ??? 2); ?>
--EXPECTREGEX--
Warning: Division by zero in [\w\/\-.]+\(1\) : eval\(\)'d code on line 1\nfloat\(INF\)
