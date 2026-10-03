<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Laporan Banjir</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f9; padding: 30px; }
        .container { max-width: 500px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .success { color: green; font-weight: bold; }
        a { display: inline-block; margin-top: 15px; text-decoration: none; color: #007bff; }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="success">Laporan Berhasil Diterima</h2>
        <p>Berikut adalah detail laporan yang Anda kirimkan:</p>
        <ul>
            <li><strong>Nama Pelapor:</strong> {{ $nama }}</li>
            <li><strong>Lokasi Kejadian:</strong> {{ $lokasi }}</li>
            <li><strong>Tinggi Genangan:</strong> {{ $tinggi }} cm</li>
        </ul>
        <a href="{{ url('/lapor-banjir') }}">&larr; Kembali ke Form</a>
    </div>
</body>
</html>