<?php
include_once "Product.php";

class CDCabinet extends product
{
    public $capacity;
    public $model;


    public function __construct($name, $price, $discount, $capacity, $model)
    {
        parent::__construct($name, $price, $discount);
        $this->capacity = $capacity;
        $this->model = $model;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }
    public function setCapacity($capacity): void
    {
        $this->capacity = "$capacity";
    }
    public function getModel()
    {
        return $this->model;
    }
    public function setModel($model): void
    {
        $this->model = "$model";
    }
    public function setPrice($price): void
    {
        $this->price = $price + ($price * (15 / 100));
    }

    public function getPrice()
    {
        return $this->price;
    }
}

$CDCabinet1 = new CDCabinet("Zankyou Sanka", 100000, 0, 100, "Kayu");
$CDCabinet2 = new CDCabinet("Jollie Jollie", 200000, 0, 200, "Besi");
$CDCabinet1->setPrice(100000);
$CDCabinet2->setPrice(200000);

echo $CDCabinet1->getPrice();
echo "<br/>";
echo $CDCabinet2->getPrice();
