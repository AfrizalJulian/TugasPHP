<?php
class KonversiSuhu {
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan) {
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function CelciusToFahrenheit() {
        if ($this->satuanSuhuAwal === 'Celcius' && $this->satuanSuhuTujuan === 'Fahrenheit') {
            return ($this->besaranSuhu * 9/5) + 32;
        }
        return null; // Handle error jika konversi tidak valid
    }

    public function FahrenheitToCelcius() {
        if ($this->satuanSuhuAwal === 'Fahrenheit' && $this->satuanSuhuTujuan === 'Celcius') {
            return ($this->besaranSuhu - 32) * 5/9;
        }
        return null; // Handle error jika konversi tidak valid
    }

    public function CelciusToRheamur() {
        if ($this->satuanSuhuAwal === 'Celcius' && $this->satuanSuhuTujuan === 'Rheamur') {
            return $this->besaranSuhu * 4/5;
        }
        return null; // Handle error jika konversi tidak valid
    }

    public function RheamurToCelcius() {
        if ($this->satuanSuhuAwal === 'Rheamur' && $this->satuanSuhuTujuan === 'Celcius') {
            return $this->besaranSuhu * 5/4;
        }
        return null; // Handle error jika konversi tidak valid
    }

    public function cetak() {
        $hasilKonversi = null;
        if ($this->satuanSuhuAwal === 'Celcius' && $this->satuanSuhuTujuan === 'Fahrenheit') {
            $hasilKonversi = $this->CelciusToFahrenheit();
        } elseif ($this->satuanSuhuAwal === 'Fahrenheit' && $this->satuanSuhuTujuan === 'Celcius') {
            $hasilKonversi = $this->FahrenheitToCelcius();
        } elseif ($this->satuanSuhuAwal === 'Celcius' && $this->satuanSuhuTujuan === 'Rheamur') {
            $hasilKonversi = $this->CelciusToRheamur();
        } elseif ($this->satuanSuhuAwal === 'Rheamur' && $this->satuanSuhuTujuan === 'Celcius') {
            $hasilKonversi = $this->RheamurToCelcius();
        }
        
        if ($hasilKonversi !== null) {
            echo "<table border='1'>";
            echo "<tr><th>Satuan Suhu Awal</th><th>Besaran Suhu</th><th>Satuan Suhu Tujuan</th><th>Hasil Konversi Suhu</th></tr>";
            echo "<tr><td>{$this->satuanSuhuAwal}</td><td>{$this->besaranSuhu}</td><td>{$this->satuanSuhuTujuan}</td><td>{$hasilKonversi}</td></tr>";
            echo "</table>";
        }
    }
}

// Buat objek dataKonversiSuhu
$dataKonversiSuhu1 = new KonversiSuhu('Celcius', 20, 'Fahrenheit');
$dataKonversiSuhu2 = new KonversiSuhu('Fahrenheit', 90, 'Celcius');
$dataKonversiSuhu3 = new KonversiSuhu('Celcius', 35, 'Rheamur');
$dataKonversiSuhu4 = new KonversiSuhu('Rheamur', 40, 'Celcius');

// Panggil fungsi cetak
$dataKonversiSuhu1->cetak();
$dataKonversiSuhu2->cetak();
$dataKonversiSuhu3->cetak();
$dataKonversiSuhu4->cetak();
?>