<?php
/**
 * this declare we respect the types on our declarations.
 */
declare(strict_types=1);

$foo = 'bar';

$$foo = 'baz';

$array = ["cook", 3, "sad"];

echo "$foo, {$$foo} \n";

var_dump($array);
