<?php 
require_once 'class_nilaimahasiswa.php'; 

$mhs1 = new NilaiMahasiswa();
$mhs1->nama = "Xavier";
$mhs1->mataKuliah = "Pemrograman Web";
$mhs1->nilaiUTS = 96;
$mhs1->nilaiUAS = 90;
$mhs1->nilaiTugas = 97;

$mhs2 = new NilaiMahasiswa();
$mhs2->nama = "Fadel";
$mhs2->mataKuliah = "Dasar-dasar Pemrograman";
$mhs2->nilaiUTS = 75;
$mhs2->nilaiUAS = 80;
$mhs2->nilaiTugas = 85;

$mhs3 = new NilaiMahasiswa();
$mhs3->nama = "Jojo";
$mhs3->mataKuliah = "UI/UX";
$mhs3->nilaiUTS = 50;
$mhs3->nilaiUAS = 30;
$mhs3->nilaiTugas = 25;

$ar_mahasiswa = [$mhs1, $mhs2, $mhs3];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Daftar Nilai Mahasiswa</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Mata Kuliah</th>
                    <th>Nilai UTS</th>
                    <th>Nilai UAS</th>
                    <th>Nilai Tugas</th>
                    <th>Nilai Akhir</th>
                    <th>Kelulusan</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach ($ar_mahasiswa as $mhs) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $mhs->nama . "</td>";
                    echo "<td>" . $mhs->mataKuliah . "</td>";
                    echo "<td>" . $mhs->nilaiUTS . "</td>";
                    echo "<td>" . $mhs->nilaiUAS . "</td>";
                    echo "<td>" . $mhs->nilaiTugas . "</td>";
                    echo "<td>" . $mhs->getNilaiAkhir() . "</td>";
                    echo "<td>" . $mhs->kelulusan() . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>