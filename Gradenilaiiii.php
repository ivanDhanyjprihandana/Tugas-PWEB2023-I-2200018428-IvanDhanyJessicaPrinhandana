<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            margin-bottom: 10px;
        }

        .result {
            font-weight: bold;
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hitung Grade</h1>
        <?php
        function hitungGrade($nilai) {
            if ($nilai >= 90 && $nilai <= 100) {
                return 'A';
            } elseif ($nilai >= 80 && $nilai < 90) {
                return 'B';
            } elseif ($nilai >= 70 && $nilai < 80) {
                return 'C';
            } elseif ($nilai >= 60 && $nilai < 70) {
                return 'D';
            } elseif ($nilai >= 0 && $nilai < 60) {
                return 'E';
            } else {
                return 'Nilai tidak valid';
            }
        }

        function hitungRataRata($nilaiArray) {
            $total = array_sum($nilaiArray);
            $jumlahData = count($nilaiArray);
            $rataRata = $total / $jumlahData;
            return $rataRata;
        }

        $nilaiSiswa = array(85, 90, 77, 92, 88); // Ganti dengan nilai yang diinginkan
        $rataRata = hitungRataRata($nilaiSiswa);
        $gradeRataRata = hitungGrade($rataRata);
        ?>

        <p>Nilai Siswa: <?php echo implode(", ", $nilaiSiswa); ?></p>
        <p>Rata-rata Nilai: <?php echo $rataRata; ?></p>
        <div class="result">Grade Rata-rata: <?php echo $gradeRataRata; ?></div>
    </div>
</body>
</html>