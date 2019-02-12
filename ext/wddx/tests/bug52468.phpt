--TEST--
Bug #52468 (wddx_deserialize corrupts integer field value when left empty)
--SKIPIF--
<?php
if (!extension_loaded('wddx')) {
    die('skip. wddx not available');
}
?>
--FILE--
<?php

$message = "<wddxPacket version='1.0'><header><comment>my_command</comment></header><data><struct><var name='handle'><number></number></var></struct></data></wddxPacket>";

print_r(wddx_deserialize($message));
print_r(wddx_deserialize($message));

?>
--EXPECTF--
Deprecated: Function wddx_deserialize() is deprecated in %s on line %d
Array
(
    [handle] => 0
)

Deprecated: Function wddx_deserialize() is deprecated in %s on line %d
Array
(
    [handle] => 0
)
