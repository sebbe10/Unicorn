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



$allUnicorns =  [
    ["Bosse", "light green", "90kg"],
    ["Lisa", "blue", "80kg"],
    ["A", "Orange", "70kg"],
    ["B", "Green", "100kg"],
    ["C", "White", "60kg"]
    ];

$renderer = new RenderUnicorn();
$renderer->renderMessage($allUnicorns);


function add (int $u, int $v) {
    return $u + $v;
}

echo add(1,1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    foreach($allUnicorns as $all){
        ?>
        <?php
        foreach($all as $nu){
            echo "<h2>$nu</h2>";
        }
    }
    
    ?>
</body>
</html>
