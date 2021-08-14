<?php

class MyIteratorAggregate implements IteratorAggregate
{
    public int $first = 1;

    public int $second = 2;

    public int $third = 3;

    public mixed $zero;

    public function __constructor()
    {
        $this->zero = 0;
    }

    public function getIterator(): ?object
    {
        return new ArrayIterator($this);
    }
}

$myIteratorAggregate = new MyIteratorAggregate();

foreach ($myIteratorAggregate as $key => $value)
{
    echo "$key\n$value\n";
}
