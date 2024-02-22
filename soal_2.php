<?php

class Nilai {
    public $mapel;
    public $nilai;

    public function __construct($mapel, $nilai) {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}

class Siswa {
    public $nrp;
    public $nama;
    public $daftarNilai = [];

    public function __construct($nrp, $nama) {
        $this->nrp = $nrp;
        $this->nama = $nama;
    }

    public function tambahNilai($mapel, $nilai) {
        $this->daftarNilai[] = new Nilai($mapel, $nilai);
    }
}

$daftarNilai = [new Nilai('Biologi', 90), new Nilai('Fisika', 85), new Nilai('Kimia', 88)];

$siswaBaru = new Siswa('12345', 'Agus');
$siswaBaru->tambahNilai('Inggris', 100);

$siswaArray = [];
for ($i = 1; $i <= 10; $i++) {
    $namaSiswa = bin2hex(random_bytes(5));
    $mapelRandom = ['Inggris', 'Indonesia', 'Korea'];
    $mapel = $mapelRandom[array_rand($mapelRandom)];
    $nilai = rand(0, 100);

    $siswa = new Siswa($i, $namaSiswa);
    $siswa->tambahNilai($mapel, $nilai);

    $siswaArray[] = $siswa;
}

echo "<br><u>Daftar Nilai:</u> " . PHP_EOL;
foreach ($daftarNilai as $nilai) {
    echo "<br>Mapel: {$nilai->mapel}, Nilai: {$nilai->nilai}" . PHP_EOL;
}

echo PHP_EOL;

echo "<br><br><u>Siswa Baru:</u> " . PHP_EOL;
echo "<br>NRP: {$siswaBaru->nrp}, Nama: {$siswaBaru->nama}" . PHP_EOL;
foreach ($siswaBaru->daftarNilai as $nilai) {
    echo "<br>Mapel: {$nilai->mapel}, Nilai: {$nilai->nilai}" . PHP_EOL;
}

echo PHP_EOL;

echo "<br><br><u>10 Siswa Random:</u> " . PHP_EOL;
foreach ($siswaArray as $siswa) {
    echo "<br>NRP: {$siswa->nrp}, Nama: {$siswa->nama}" . PHP_EOL;
    foreach ($siswa->daftarNilai as $nilai) {
        echo "<br>Mapel: {$nilai->mapel}, Nilai: {$nilai->nilai}" . PHP_EOL;
    }
    echo PHP_EOL;
}

?>
