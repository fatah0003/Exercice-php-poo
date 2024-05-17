<?php
namespace App;
abstract class Mammal extends Animal {
    protected string $furColor;
    public function __construct(string $name, int $age, string $furColor) {
        parent::__construct($name, $age,);
        $this->furCOlor = $furColor;
    }
    public function getFurColor(): string {
        return $this->furColor;
    }
    public function setFurColor(string $furColor): void {
        $this->furColor = $furColor;
    }
    abstract public function makeSound(): string;
    abstract public function move(): string;
}