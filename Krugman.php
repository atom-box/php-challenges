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

    public function advise(){
        echo "Borrowing stimulates.\n";
    }
}


$x = new Krugman();
$x -> advise();