<?php
namespace App;
class Dog extends Mammal {
    private string $breed;
    public function __construct(string $name, int $age, float $wingSpan, string $breed){
    parent::__construct($name, $age, $wingSpan,);
    $this->breed = $breed;
    }
    public function getBreed(): string{
        return $this->breed;
    }
    public function setBreed(string $breed): void {
        $this->breed = $breed;
    }
    public function makeSound(){
        return "Bonjour";
    }
    abstract public function move(){
        return "Bonjour";
    }
}