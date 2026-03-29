<?php

class Data {
    public $nama;
    public $email;
    public $umur;

    public function __construct($nama, $email, $umur) {
        $this->nama = $nama;
        $this->email = $email;
        $this->umur = $umur;
    }

    public function tampilkanData() {
        return "
        <h2>Hasil Input</h2>
        Nama: $this->nama <br>
        Email: $this->email <br>
        Umur: $this->umur <br>
        ";
    }
}

?>