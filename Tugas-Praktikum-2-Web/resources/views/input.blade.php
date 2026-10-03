<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrilink - Input Produk Pertanian</title>
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
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #444;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }

        input:focus,
        select:focus {
            border-color: #2e7d32;
            outline: none;
        }

        .btn-submit {
            background-color: #2e7d32;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-submit:hover {
            background-color: #1b5e20;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>🌱 Agrilink - Tambah Produk Tani</h2>
        <form action="{{ route('agrilink.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama Produk:</label>
                <input type="text" name="nama_produk" placeholder="Contoh: Beras Organik IR64" required>
            </div>
            <div class="form-group">
                <label>Kategori:</label>
                <select name="kategori" required>
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Padi & Palawija">Padi & Palawija</option>
                    <option value="Sayuran Segar">Sayuran Segar</option>
                    <option value="Buah-buahan">Buah-buahan</option>
                    <option value="Rempah-rempah">Rempah-rempah</option>
                </select>
            </div>
            <div class="form-group">
                <label>Harga Satuan (Rp):</label>
                <input type="number" name="harga" placeholder="Contoh: 12000" required>
            </div>
            <div class="form-group">
                <label>Jumlah Stok (Kg / Unit):</label>
                <input type="number" name="stok" placeholder="Contoh: 150" required>
            </div>
            <div class="form-group">
                <label>Nama Petani / Mitra:</label>
                <input type="text" name="nama_petani" placeholder="Contoh: Pak Budi" required>
            </div>
            <button type="submit" class="btn-submit">Proses & Simpan Sementara</button>
        </form>
    </div>
</body>

</html>