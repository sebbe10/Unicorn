<?php

class Unicorn {
    private $name = "";
    private $color = "pink";
    private $weight = "";

    function __construct($name, $color = "pink", $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight= $weight;
    }

    function getMessage(){
        return "Unicorn {$this->name} says hello I am {$this->color} and my weight is {$this->weight}!";
    }
}

class RenderUnicorn {
    function renderMessage($unicorn){
  
        // echo $unicorn->getMessage();
  
        echo "<h1>{$unicorn->getMessage()}</h1>";
    }
}

$u = new Unicorn("Bosse", "light green", "90kg");
$v = new Unicorn("Lisa", "blue", "80kg");
$a = new Unicorn("A", "Orange", "70kg");
$b = new Unicorn("B", "Green", "100kg");
$c = new Unicorn("C", "White", "60kg");



$renderer = new RenderUnicorn();
$renderer->renderMessage($u);
$renderer->renderMessage($v);
$renderer->renderMessage($a);
$renderer->renderMessage($b);
$renderer->renderMessage($c);

function add (int $u, int $v) {
    return $u + $v;
}

echo add(1,1);

?>



