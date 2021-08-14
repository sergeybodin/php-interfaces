<?php

/**
 * Class MyArrayAccess
 * пример интерфейсв ArrayAccess
 */
class MyArrayAccess implements ArrayAccess
{
    private array $array = [];

    public function offsetExists($offset): bool
    {
        return isset($this->array[$offset]);
    }

    public function offsetGet($offset): mixed
    {
        return $this->array[$offset] ?? null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->array[] = $value;
        } else {
            $this->array[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->array[$offset]);
    }
}

$myArrayAccess = new MyArrayAccess();

$myArrayAccess['one'] = '1';
$myArrayAccess['two'] = '2';
$myArrayAccess[] = '3';
unset($myArrayAccess['one']);

var_dump(
    $myArrayAccess['one'],
    $myArrayAccess['two'],
    isset($myArrayAccess['one']),
    isset($myArrayAccess['two']),
    $myArrayAccess
);
