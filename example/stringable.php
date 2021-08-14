<?php

class MyString
{
    private string $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function __toString(): string
    {
        return $this->data;
    }
}

function getString(string|Stringable $value)
{
    echo "$value\n";
}

$myString = new MyString('строка');

getString($myString);
