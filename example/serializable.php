<?php

class MySerializable implements Serializable
{

    private string $data;

    public function __construct()
    {
        $this->data = 'закрытая информация';
    }

    public function serialize(): ?string
    {
        return serialize($this->data);
    }

    public function unserialize($serialized): void
    {
        $this->data = unserialize($serialized);
    }

    public function getData(): ?string
    {
        return $this->data;
    }
}

$mySerializable = new MySerializable();
$serialized = serialize($mySerializable);

var_dump($serialized);

$unserialized = unserialize($serialized);

var_dump($unserialized->getData());
