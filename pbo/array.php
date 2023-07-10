<?php
class Induk
{
    public $nilaiRandom;
    public function __construct($jml)
    {
        $this->nilaiRandom = $jml;
    }
    public function total()
    {
        $totalNilai = 0;
        foreach ($this->nilaiRandom as $angka) {
            //$totalNilai = $b + $angka sama -> $totalNilai += $angka 
            $totalNilai += $angka;
        }
        return $totalNilai;
    }
    public function rata_rata()
    {
        $jumlahNilai = count($this->nilaiRandom);
        $totalNilai = $this->total();
        return $totalNilai / $jumlahNilai;
    }
    public function NilaiTerendah()
    {
        $nilaiTerendah = $this->nilaiRandom[0];
        foreach ($this->nilaiRandom as $nilai) {
            if ($nilai < $nilaiTerendah) {
                $nilaiTerendah = $nilai;
            }
        }
        return $nilaiTerendah;
    }
    public function NilaiTertinggi()
    {
        $nilaiTertinggi = $this->nilaiRandom[0];
        foreach ($this->nilaiRandom as $nilai) {
            if ($nilai > $nilaiTertinggi) {
                $nilaiTertinggi = $nilai;
            }
        }
        return $nilaiTertinggi;
    }
}
class Anak extends Induk
{
    public function __construct()
    {
        $nilaiRandom = [];
        for ($feb = 0; $feb < 50; $feb++) {
            $nilaiRandom[] = rand(1, 300);
        }
        parent::__construct($nilaiRandom);
    }
}
$bri = new Anak(50);
//implode : ubah array -> text/kalimat seperti tanda pemisah (, dll) agar mudah dibaca.
echo "Nilai Random: " . implode(", ", $bri->nilaiRandom);
echo "</br>";
echo "Total: " . $bri->total();
echo "</br>";
echo "Rata - rata: " . $bri->rata_rata();
echo "</br>";
echo "Nilai tertinggi: " . $bri->NilaiTertinggi();
echo "</br>";
echo "Nilai terendah: " . $bri->NilaiTerendah();
