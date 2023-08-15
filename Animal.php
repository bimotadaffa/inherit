<?php

class Animal {
    public ?string $name = null;
    public int $foot;
    private bool $isMamal;

    public function __construct($name, $foot, $isMamal= true) {
        $this->name = $name;
        $this->foot = $foot;
        $this->isMamal = $isMamal;
        // echo "hello from construct\n";
    }

    public function introduce($sound): void {
        if ($this->name){
            echo "hello saya animal, nama saya {$this->name}  ";
        }
        echo $this->sound($sound);
    }

    public function sound(string $sound): void {
        echo "suara saya {$sound} \n";
    }

    public function setIsMamal($isMamal): void {
        $this->isMamal = is_bool($isMamal) ? $isMamal : null;
    }

    public function getIsMamal(): ?bool {
        return $this->isMamal; 
    }
    
    public function eat(bool $isHungry): void {
        // if ($isHungry){
        //     echo "saya lapar";
        // } else {
        //     echo "saya tidak lapar";
        // }
        echo $isHungry ? "saya lapar" : "saya tidak lapar";
    }
}

$dog = new Animal("tom", 4);
$dog->introduce("gukguk");
$dog->sound("guk"); // kalo sound nya di protect atau private gakan bisa
echo $dog->name. "\n"; // kalo name nya di protect atau private gakan bisa
// print_r($dog);
$dog->setIsMamal(false);
var_dump($dog->getIsMamal()); 

// $cat = new Animal("jerry", 4);
// $cat->introduce("meong meong");

// $duck = new Animal("donal", 2, false);
// $duck->introduce("kwek kwek");
// $duck->eat(false);




?>