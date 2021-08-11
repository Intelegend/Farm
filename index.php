<?php

abstract class Farm
{
    public $id = 0;
    public $count;
    public abstract function getProduct();
}

class Cow extends Farm
{
    function __construct($count)
    {
        $this->count = $count;
        $this->id = substr(md5(rand()), 0, 3);
    }

    public function getProduct()
    {
        return rand(8, 12);
    }
}

class Chicken extends Farm
{

    function __construct($count)
    {
        $this->count = $count;
        $this->id = substr(md5(rand()), 0, 3);
    }

    public function getProduct()
    {
        return rand(0, 1);
    }
}


$sumMilk = 0;
$sumEgg = 0;
$cow = new Cow(10);
$chicken = new Chicken(20);
for ($i = 0; $i < $cow->count; $i++) {
    $sumMilk += $cow->getProduct();
}
for ($i = 0; $i < $chicken->count; $i++) {
    $sumEgg += $chicken->getProduct();
}
echo "Молоко " . $sumMilk . "\n";
echo "Яйца " . $sumEgg . "\n";
