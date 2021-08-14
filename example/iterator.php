<?php

class MyIterator implements Iterator
{

    private int $position;

    public array $array = [
        'zero',
        'first',
        'second',
        'third'
    ];

    public function __construct()
    {
        $this->position = 0;
    }

    public function current(): mixed
    {
        return $this->array[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->array[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}

$myIterator = new MyIterator();

var_dump($myIterator->valid());

foreach ($myIterator as $key => $value) {
    echo "$key\n$value\n";
}

var_dump($myIterator->valid());
