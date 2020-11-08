<?php

// Interface definition
interface Celebrity {
    public function advise();
    public function set_name($name);
    public function get_name();
}

// Class definitions
class Pundit implements Celebrity{
    private $name;
    
    function __construct(){
        $this -> name = $name; 
    } 

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


// Wow - the tempo of that Carmen suite sounded like the Ramones discovering the violin. 