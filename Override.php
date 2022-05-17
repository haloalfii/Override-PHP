<?php
class Bapak
{
    private $nama;
    public function setNamaBapak($inputNama)
    {
        $this->nama = $inputNama;
    }

    public function getNamaBapak()
    {
        return $this->nama;
    }
}

// $Bapak = new Bapak();
// $Bapak->setNamaBapak('Ferry');
// echo $Bapak->getNamaBapak();

class Anak extends Bapak
{
    public function setNamaBapak($inputNama)
    {
        $this->nama = 'Alfian';
    }

    public function getNamaBapak()
    {
        return $this->nama;
    }
}

$Anak = new Anak();
$Anak->setNamaBapak('Fery');
echo $Anak->getNamaBapak();
