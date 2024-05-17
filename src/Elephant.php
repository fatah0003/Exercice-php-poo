<?php
namespace App;
abstract class Elephant extends Mammal {
public float $tuskLength;
public function __construct(string $name, int $age, float $wingSpan, float $tuskLength) {
    parent::__construct($name, $age, $wingSpan,);
    $this->tuskLength = $tuskLength;
}
public function getTuskLength(): float {
    return $this->tuskLength;
}
public function setTuskLength(float $tuskLength): void {
    $this->tuskLength = $tuskLength;
}
    public function makeSound(){
        return "Bonjour";
    }
    abstract public function move(){
        return "Bonjour";
    }
}