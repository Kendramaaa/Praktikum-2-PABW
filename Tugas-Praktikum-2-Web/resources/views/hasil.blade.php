<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrilink - Hasil Pengolahan Produk</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f7f4;
            color: #333;
            padding: 40px;
        }

        .container {
            max-width: 550px;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            margin: auto;
        }

        h2 {
            color: #2e7d32;
            text-align: center;
            margin-bottom: 20px;
        }

        .success-badge {
            background-color: #e8f5e9;
            color: #2e7d32;
            padding: 10px;
            border-radius: 6px;
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            color: #555;
            width: 40%;
        }

        td {
            color: #222;
            font-weight: 500;
        }

        .total-row {
            background-color: #f9fbe7;
            font-weight: bold;
            color: #e65100;
        }

        .btn-back {
            display: block;
            text-align: center;
            background-color: #546e7a;
            color: white;
            text-decoration: none;
            padding: 10px;
            border-radius: 6px;
            font-weight: bold;
            transition: background 0.3s;
        }

        .btn-back:hover {
            background-color: #37474f;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>🌾 Hasil Proses Data Agrilink</h2>
        <div class="success-badge">Data Berhasil Diproses</div>

        <table>
            <tr>
                <th>Nama Produk</th>
                <td>{{ $nama_produk }}</td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td>{{ $kategori }}</td>
            </tr>
            <tr>
                <th>Harga Satuan</th>
                <td>Rp {{ number_format($harga, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th>Jumlah Stok</th>
                <td>{{ $stok }} Unit/Kg</td>
            </tr>
            <tr>
                <th>Mitra Petani</th>
                <td>{{ $nama_petani }}</td>
            </tr>
            <tr class="total-row">
                <th>Total Nilai Aset Stok</th>
                <td>Rp {{ number_format($total_nilai, 0, ',', '.') }}</td>
            </tr>
        </table>

        <a href="{{ url('/agrilink/input') }}" class="btn-back">&larr; Input Produk Lainnya</a>
    </div>
</body>

</html>