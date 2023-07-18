<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Laundry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: skyblue;
            text-align: center;
        }

        h1 {
            margin-bottom: 40px;
        }

        .order-success {
            margin-top: 40px;
        }

        .order-success a {
            text-decoration: none;
            background-color: lightseagreen;
            color: black;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 4px;
            margin-right: 10px;
            transition: background-color 0.3s;
        }

        .order-success a:hover {
            background-color: darkseagreen;
        }
    </style>
</head>
<body>
    <h1>Terima Kasih Telah Melakukan Order Laundry</h1>
    <div class="order-success">
        <a href="index.html">Order Lagi</a>
        <a href="lihat.php">Lihat Rincian Order</a>
    </div>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai input dari form
        $name = $_POST["name"];
        $package = $_POST["package"];
        $weight = $_POST["weight"];

        // Menghitung total harga berdasarkan paket dan berat
        $packagePrice = 0;
        if ($package == "Paket Setrika") {
            $packagePrice = 10000;
        } elseif ($package == "Paket Reguler") {
            $packagePrice = 15000;
        } elseif ($package == "Paket Express") {
            $packagePrice = 20000;
        }
        $totalPrice = $packagePrice * $weight;

        // Format data yang akan disimpan dalam file .txt
        $data = "Nama: " . $name . "\n" .
                "Paket: " . $package . "\n" .
                "Berat: " . $weight . " kg\n" .
                "Total Harga: Rp " . number_format($totalPrice, 2) . "\n\n";

        // Nama file untuk menyimpan data pesanan
        $file = "pesanan.txt";

        // Menambahkan data pesanan ke file .txt
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

        }
    ?>
</body>
</html>
