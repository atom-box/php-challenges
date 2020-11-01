<?php

interface Pundit {
    public function advise();
    public function set_name();
}

class Krugman {
    private $name;
    
    function set_name($s){
        $this -> name = $s;
    }

    function get_name(){
        return $this -> name;
    }

    public function advise(){
        echo "Borrowing stimulates.\n";
    }
}


$x = new Krugman();
$x -> advise();
$x -> set_name('Paul');
echo($x -> get_name()."\n");