<?php

$string = 'string';

$array = ['a','r','r','a','y'];

$bool = true;

$object = new stdClass();
$object->one = 1;
$object->two = 2;

if (is_iterable($string) === true) {
    echo "string true\n";
} else {
    echo "string false\n";
}

if (is_iterable($array) === true) {
    echo "array true\n";
} else {
    echo "array false\n";
}

if (is_iterable($bool) === true) {
    echo "bool true\n";
} else {
    echo "bool false\n";
}

$yields = function() {
    yield 1;
    yield 2;
};

if (is_iterable(($yields)()) === true) {
    echo "yield true\n";
} else {
    echo "yield false\n";
}

if (is_iterable($object) === true) {
    echo "object true\n";
} else {
    echo "object false\n";
}

foreach ($object as $key => $value) {
    echo "object->$key = $value\n";
}
