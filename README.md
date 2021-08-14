PHP встренные интерфейсы с примерами
-
[![Address](https://img.shields.io/static/v1?label=php&message=v8.0&color=0c7cd5)](https://api.diamed.group)
___

1. Traversable - определяет является ли обходимым traversable с использованием foreach, интерфейс не имеет методов, его единственная цель - быть базовым интерфейсом для всех обходимых классов

<details>
<summary>Пример интерфейса ...</summary>

``` php
interface Traversable {}
```
```
php example/traversable.php
```

</details>

---
2. Iterator - для внешних итераторов или объектов, которые могут повторять себя изнутри

<details>
<summary>Пример интерфейса ...</summary>

``` php
interface Iterator extends Traversable {
    abstract public current(): mixed
    abstract public key(): mixed
    abstract public next(): void
    abstract public rewind(): void
    abstract public valid(): bool
}
```
```
php example/iterator.php
```

</details>

---
3. IteratorAggregate - интерфейс для создания внешнего итератора

<details>
<summary>Пример интерфейса ...</summary>

``` php
interface IteratorAggregate extends Traversable {
    public function getIterator(): object 
}
```
```
php example/iteratorAggregate.php
```

</details>

---
4. Throwable - является родительским интерфейсом для всех объектов, выбрасывающихся с помощью выражения throw, включая классы Error и Exception

<details>
<summary>Пример интерфейса ...</summary>

``` php
interface Throwable {
    abstract public getMessage(): string
    abstract public getCode(): int
    abstract public getFile(): string
    abstract public getLine(): int
    abstract public getTrace(): array
    abstract public getTraceAsString(): string
    abstract public getPrevious(): ?Throwable
    abstract public __toString(): string
}
```
```
php example/throwable.php
```

</details>

___
5. ArrayAccess - интерфейс обеспечивает доступ к объектам в виде массива

<details>
<summary>Пример интерфейса ...</summary>

``` php
interface ArrayAccess {
    public offsetExists(mixed $offset): bool
    public offsetGet(mixed $offset): mixed
    public offsetSet(mixed $offset, mixed $value): void
    public offsetUnset(mixed $offset): void
}
```
```
php example/arrayAccess.php
```

</details>

___
6. Serializable - интерфейс для реализации методов сериализации

<details>
<summary>Пример интерфейса ...</summary>

``` php
interface Serializable {
    abstract public serialize(): ?string
    abstract public unserialize(string $data): void
}
```
```
php example/serializable.php
```

</details>

___
7. Stringable - интерфейс который разрешает функциям делать проверку объекта на union string|Stringable которая примет строку на входе

<details>
<summary>Пример интерфейса ...</summary>

``` php
interface Stringable {}
```
```
php example/stringable.php
```

</details>
