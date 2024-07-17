<?php
class App
{
    private string $nama;
    // setter
    public function __construct($nama){
        $this->nama = $nama;
    }
    // getter
    public function getNama():string{
        return "$this->nama" ;
    }
}