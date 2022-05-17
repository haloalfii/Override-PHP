<?php
include_once "Product.php";

class CDMusic extends product
{
    private $artist;
    private $genre;

    public function __construct($name, $price, $discount, $artist, $genre)
    {
        parent::__construct($name, $price, $discount);
        $this->artist = $artist;
        $this->genre = $genre;
    }

    public function getArtist()
    {
        return $this->artist;
    }
    public function setArtist($artist): void
    {
        $this->artist = "$artist";
    }
    public function getGenre()
    {
        return $this->genre;
    }
    public function setGenre($genre): void
    {
        $this->genre = "$genre";
    }
    public function setPrice($price): void
    {
        $this->price = $price + ($price / 10);
    }
    public function setDiscount($discount)
    {
        $this->discount = $discount + 10;
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}

$Pertama = new CDMusic('Lingsir Wengi', 10000, 10, 'Fery', 'Horor');
$Kedua = new CDMusic("Mantra Hujan", 20000, 0, "Kobo Kanaeru", "Melody");

$Pertama->setDiscount(10);
$Kedua->setDiscount(0);

echo $Pertama->getDiscount();
echo "<br/>";
echo $Kedua->getDiscount();
