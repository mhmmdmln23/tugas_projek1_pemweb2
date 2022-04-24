<?php
class Bmi 
{
    public $berat, $tinggi;

    function __construct($berat,$tinggi)
    {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }
    function nilaiBmi()
    {
        return $this->berat / ($this->tinggi * $this->tinggi);
    }

    function statusBmi()
    {
        if($this->nilaiBmi() < 18.5) {
            return "Kekurangan berat badan";
        }elseif ($this->nilaiBmi() >= 18.5 && $this->nilaiBmi() <= 24.9) {
            return "Normal (Ideal)";
        }elseif ($this->nilaiBmi() >= 25 && $this->nilaiBmi() <= 29.9) {
            return "Kelebihan berat badan";
        }elseif ($this->nilaiBmi() >= 30) {
            return "Kegemukan (obesitas)";
        }
    }
}
// $obj = new Bmi(20,1.7);
// echo $obj->nilaiBmi()."\n";
// echo $obj->statusBmi();