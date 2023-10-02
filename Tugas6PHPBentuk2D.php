<?php
abstract class Bentuk2D {
    abstract public function luasBidang();
    abstract public function kelilingBidang();
}

class Lingkaran extends Bentuk2D {
    private $jari2;

    public function __construct($jari2) {
        $this->jari2 = $jari2;
    }

    public function namaBidang() {
        return "Lingkaran";
    }

    public function luasBidang() {
        return pi() * $this->jari2 * $this->jari2;
    }

    public function kelilingBidang() {
        return 2 * pi() * $this->jari2;
    }
}

class PersegiPanjang extends Bentuk2D {
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang() {
        return "Persegi Panjang";
    }

    public function luasBidang() {
        return $this->panjang * $this->lebar;
    }

    public function kelilingBidang() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

class Segitiga extends Bentuk2D {
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang() {
        return "Segitiga";
    }

    public function luasBidang() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function kelilingBidang() {
        // Untuk segitiga, Anda harus mengetahui panjang sisi-sisinya.
        // Jika hanya ada alas dan tinggi, tidak bisa menghitung keliling.
        return "Tidak dapat menghitung keliling tanpa panjang sisi-sisi.";
    }
}
?>