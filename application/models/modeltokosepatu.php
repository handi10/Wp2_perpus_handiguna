<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ModelTokoSepatu extends CI_Model
{
    public $merk, $harga_sepatu;
    public function harga($merk = null)
    {
        $this->merk = $merk;
        if ($this->merk == 'Nike'){
            $this->harga_sepatu = 375000;
        }
        elseif ($this->merk == 'Adidas')
        {
            $this->harga_sepatu = 300000;
        }
        elseif ($this->merk == 'Kickers')
        {
            $this->harga_sepatu = 250000;
        }
        elseif ($this->merk == 'Eiger')
        {
            $this->harga_sepatu = 275000;
        }
        elseif ($this->merk == 'Bucherri')
        {
         $this->harga_sepatu = 400000;
        }
        return $this->harga_sepatu;
    }
}
?>