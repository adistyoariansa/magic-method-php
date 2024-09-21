<?php
class Robot{
// Property
public $suara;
public $berat;

// Constructor
public function __construct($suara, $berat){
    $this->suara = $suara;
    $this->berat = $berat;
}

// Metode set dan get untuk suara
public function set_suara($suara){
    $this->suara = $suara;
}
public function get_suara(){
    return $this->suara;
}

// Metode set dan get untuk berat
public function set_berat($berat){
    $this->berat = $berat; // Memperbaiki kesalahan sebelumnya
}
public function get_berat(){
    return $this->berat;
}

// Menggunakan __toString untuk mengembalikan string
public function __toString(){
    return "Robot suara: $this->suara, berat: $this->berat";
}
}
?>