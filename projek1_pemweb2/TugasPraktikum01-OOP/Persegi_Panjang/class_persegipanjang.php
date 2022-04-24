<?php
class persegipanjang { 
var $P;
var $L;
    function  __construct( $L, $P ){
        $this->P = $P;
        $this->L = $L;
    }

    function panjang(){
        return $this->P;
    }

    function lebar(){
        return $this->L;
    }

    function getLuas(){
        return $this->P * $this->L;
    }

    function getKeliling(){
        $result = $this->P + $this->L;
        return 2 * $result;
    }
}
?>