<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Form Lapor Banjir</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            padding: 30px;
        }

        .container {
            max-width: 500px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Form Pelaporan Banjir (Lapor Banjir)</h2>
        <form action="{{ route('lapor.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama Pelapor:</label>
                <input type="text" name="nama" required>
            </div>
            <div class="form-group">
                <label>Lokasi Kejadian (Kecamatan/Desa):</label>
                <input type="text" name="lokasi" required>
            </div>
            <div class="form-group">
                <label>Tinggi Genangan Air (cm):</label>
                <input type="number" name="tinggi" required>
            </div>
            <button type="submit">Kirim Laporan</button>
        </form>
    </div>
</body>

</html>