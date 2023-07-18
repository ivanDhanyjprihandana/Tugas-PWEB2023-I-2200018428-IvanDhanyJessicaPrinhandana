<!DOCTYPE html>
<html>
<head>
    <title>Rincian Order Laundry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: skyblue;
        }
        
        h1 {
            text-align: center;
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 600px;
        }
        
        .order-details {
            background-color: white;
            width: 600px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .order-details h2 {
            text-align: center;
        }
        
        .order-details pre {
            font-family: Consolas, monospace;
            font-size: 14px;
            white-space: pre-wrap;
            background-color: lightgrey;
            padding: 10px;
        }
        
        .order-details a {
            display: block;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Rincian Order Laundry</h1>
    <div class="container">
        <div class="order-details">
            <h2>Data Pesanan:</h2>
            <?php
            // Membaca isi file pesanan.txt
            $file = "pesanan.txt";
            $data = file_get_contents($file);
            
            // Menampilkan data pesanan
            if (!empty($data)) {
                echo "<pre>" . $data . "</pre>";
            } else {
                echo "<p>Tidak ada data pesanan yang tersedia.</p>";
            }
            ?>
            <a href="index.html">Kembali ke halaman Order</a>
        </div>
    </div>
</body>
</html>
