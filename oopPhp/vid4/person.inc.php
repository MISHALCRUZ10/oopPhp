<?php

class Person {
    private $first = "mishal";
    private $last = "cruz";
    private $age ="20";
    private $occupation ="engineer";

    public function owner() {
        $a = $this->occupation; 
        return $a;
    }
}

class Pet {
    // public function owner() { 
    //     $a = "kapoy";
    //     return $a;
    // }
}
