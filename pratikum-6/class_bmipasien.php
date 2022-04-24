<?php
require_once 'class_bmi.php';
require_once 'class_pasien.php';

class BmiPasien extends Bmi
{
    public $tanggal, $pasien;
    function __construct($id,$kode,$nama,$tmp_lahir,$tgl_lahir,$tanggal,$email,$gender,$berat,$tinggi)
    {
        parent::__construct($berat,$tinggi);
        $this->pasien = new Pasien($id,$kode,$nama,$tmp_lahir,$tgl_lahir,$email,$gender);
        $this->tanggal = $tanggal;
    }
}