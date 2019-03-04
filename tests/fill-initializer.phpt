--TEST--
Check freshly allocated paletted array is filled with the given initializer
--SKIPIF--
<?php if(!extension_loaded("chunkutils2")) die("skip extension not loaded"); ?>
--FILE--
<?php
const FILL_VALUE = 6;
$array = new \pocketmine\level\format\PalettedBlockArray(FILL_VALUE);

for($x = 0; $x < 16; ++$x){
	for($z = 0; $z < 16; ++$z){
		for($y = 0; $y < 16; ++$y){
			$entry = $array->get($x, $y, $z);
			if($entry !== FILL_VALUE){
				die("wrong value at $x $y $z: expected " . FILL_VALUE . " got $entry");
			}
		}
	}
}

var_dump("ok");
?>
--EXPECT--
string(2) "ok"