<?php

interface Adult {
    public function payRent(int $dollar);
    public function vote(string $candidate);
}

interface Activist {
    const FEE = 0;

    public function giveAdvice(string $verb);
    public function requestFee();
}

class Krugman implements Activist, Adult {
    function __construct(string $strategy){
        $this -> bank = 5000;
        $this -> strategy = $strategy;
    }
    public function payRent(int $dollar){
        $rent = rand(360, 2100);
        $this -> bank -= $rent;
    }
    public function vote(string $candidate){
        echo("I voted for $candidate.");
    }
    public function giveAdvice(string $verb){
        echo("To deal with $verb ing we should $strategy.");
    }
    public function requestFee(){
        echo ("Now please pay me FEE dollars.");
    }
}