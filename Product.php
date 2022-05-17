<?php
class product
{
    private $name;
    private $price;
    private $discount;

    public function __construct($name, $price, $discount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    // SETTER
    public function setName($name): void
    {
        if (!is_string($name)) {
            throw new Exception("Nama Wajib String !");
        }
        $this->name = $name;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}
