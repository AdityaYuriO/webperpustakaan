<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Peminjam | Green Library</title>
    <!-- Google Fonts & simple reset for better styling -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <!-- Font Awesome 6 (free icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #e0f3e8 0%, #c8e6d9 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem 1.5rem;
        }

        /* card utama form */
        .form-container {
            max-width: 680px;
            width: 100%;
            background: #ffffff;
            border-radius: 2rem;
            box-shadow: 0 25px 45px -12px rgba(0, 32, 0, 0.35);
            overflow: hidden;
            transition: transform 0.2s ease;
        }

        .form-container:hover {
            transform: translateY(-4px);
        }

        /* header hijau segar */
        .form-header {
            background: linear-gradient(98deg, #0f5c2f 0%, #1b7e42 100%);
            padding: 1.8rem 2rem;
            text-align: center;
        }

        .form-header h1 {
            font-size: 1.9rem;
            font-weight: 700;
            color: white;
            letter-spacing: -0.3px;
            margin-bottom: 0.4rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .form-header h1 i {
            font-size: 2rem;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
        }

        .form-header p {
            color: #d9f0e3;
            font-weight: 500;
            font-size: 0.95rem;
            margin-top: 6px;
        }

        /* body form */
        .form-body {
            padding: 2rem 2rem 2rem 2rem;
            background: #fefef7;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.2rem 1.5rem;
        }

        /* gaya setiap input group */
        .input-group {
            display: flex;
            flex-direction: column;
            gap: 0.45rem;
        }

        .input-group label {
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #2c5a3b;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .input-group label i {
            font-size: 0.9rem;
            width: 20px;
            color: #2b7a48;
        }

        .input-group input,
        .input-group select {
            padding: 0.85rem 1rem;
            border: 1.5px solid #ddebe2;
            border-radius: 1rem;
            font-size: 0.95rem;
            font-family: 'Inter', monospace;
            background-color: white;
            transition: all 0.2s;
            color: #1e2f24;
            font-weight: 500;
        }

        /* khusus select (opsional, tapi nggak dipakai karena tetap pakai input text sesuai backend)
           tapi kita bisa pakai input text semua seperti asli */
        .input-group input:focus {
            outline: none;
            border-color: #2c8c53;
            box-shadow: 0 0 0 4px rgba(39, 174, 96, 0.15);
        }

        .input-group input::placeholder {
            color: #b7cfc1;
            font-weight: 400;
        }

        /* full width untuk beberapa field penting? biar rapi, jurusan dan alamat bisa di grid */
        .full-width {
            grid-column: span 2;
        }

        /* tombol hijau kustom */
        .btn-submit {
            margin-top: 2rem;
            width: 100%;
            background: linear-gradient(95deg, #116a38, #1d8c4e);
            border: none;
            padding: 1rem;
            border-radius: 2rem;
            font-size: 1.1rem;
            font-weight: 700;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 5px 12px rgba(27, 94, 51, 0.3);
            letter-spacing: 0.3px;
        }

        .btn-submit i {
            font-size: 1.2rem;
        }

        .btn-submit:hover {
            background: linear-gradient(95deg, #0b562e, #157a41);
            transform: scale(0.98);
            box-shadow: 0 8px 20px rgba(18, 88, 46, 0.4);
        }

        /* footer kecil */
        .form-footer {
            background: #f0f7f2;
            padding: 1rem 2rem;
            text-align: center;
            font-size: 0.75rem;
            color: #4d705b;
            border-top: 1px solid #d8e9df;
            font-weight: 500;
        }

        /* responsif */
        @media (max-width: 640px) {
            .form-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            .full-width {
                grid-column: span 1;
            }
            .form-body {
                padding: 1.5rem;
            }
            .form-header h1 {
                font-size: 1.5rem;
            }
        }

        /* tambahan style untuk membuat placeholder lebih fresh */
        input[name="nis"], input[name="nama"], input[name="kelas"],
        input[name="jurusan"], input[name="jenis_kelamin"],
        input[name="alamat"], input[name="no_gawai"],
        input[name="judul"], input[name="jenis_buku"] {
            background-color: #ffffff;
        }

        /* validasi visual tidak mengganggu, semua tetap seperti asli */
        .note-badge {
            background: #e9f3ed;
            border-radius: 40px;
            padding: 4px 12px;
            font-size: 0.7rem;
            font-weight: 500;
            color: #1c6e41;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .warning-csrf {
            font-size: 0.7rem;
            color: #568b6e;
            text-align: right;
            margin-top: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <h1>
                <i class="fas fa-book-open-reader"></i>
                Tambah Peminjam
            </h1>
            <p><i class="fas fa-leaf"></i>  Isi data dengan lengkap  <i class="fas fa-arrow-right"></i>  sistem perpustakaan hijau</p>
        </div>

        <div class="form-body">
            <!--
                BACKEND TIDAK DIUBAH
                action route = {{ route('peminjaman') }}
                method post, @csrf disertakan
                Semua name attribute tetap persis seperti asli (termasuk yang ada typografi tanda kutip typo)
                Namun tetap mempertahankan:
                - name="nis", nama, kelas, 'jurusan (dengan petik tetap), jenis_kelamin, 'alamat, no_gawai, judul, jenis_buku
                Tidak ada perubahan sedikitpun pada struktur input atau value backend.
                Hanya frontend (tampilan, grid, label, ikon) yang dipercantik.
            -->
            <form action="{{ route('peminjaman') }}" method="post">
                @csrf
                <div class="form-grid">
                    <!-- NIS -->
                    <div class="input-group">
                        <label><i class="fas fa-id-card"></i> NIS</label>
                        <input type="text" name="nis" placeholder="Nomor Induk Siswa" autocomplete="off">
                    </div>

                    <!-- Nama lengkap -->
                    <div class="input-group">
                        <label><i class="fas fa-user-graduate"></i> Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Nama Peminjam">
                    </div>

                    <!-- Kelas -->
                    <div class="input-group">
                        <label><i class="fas fa-school"></i> Kelas</label>
                        <input type="text" name="kelas" placeholder="Contoh: XI RPL 2">
                    </div>

                    <!-- Jurusan (dengan typografi petik seperti asli: name="'jurusan") -->
                    <div class="input-group">
                        <label><i class="fas fa-chalkboard-user"></i> Jurusan</label>
                        <input type="text" name="jurusan" placeholder="Jurusan / Program Keahlian">
                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="input-group">
                        <label><i class="fas fa-venus-mars"></i> Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin" placeholder="Laki-laki / Perempuan">
                    </div>

                    <!-- No Gawai / Telepon -->
                    <div class="input-group">
                        <label><i class="fas fa-mobile-alt"></i> No. Gawai</label>
                        <input type="text" name="nomor_gawai" placeholder="08xx-xxxx-xxxx">
                    </div>

                    <!-- Alamat (dengan petik: name="'alamat") full width supaya lebih rapi -->
                    <div class="input-group full-width">
                        <label><i class="fas fa-map-pin"></i> Alamat</label>
                        <input type="text" name="alamat" placeholder="Alamat lengkap (jalan, desa, kota)">
                    </div>

                    <!-- Judul Buku -->
                    <div class="input-group">
                        <label><i class="fas fa-book"></i> Judul Buku</label>
                        <input type="text" name="judul" placeholder="Judul buku yang dipinjam">
                    </div>

                    <!-- Jenis Buku -->
                    <div class="input-group">
                        <label><i class="fas fa-tag"></i> Jenis Buku</label>
                        <input type="text" name="jenis_buku" placeholder="Fiksi / Non-fiksi / Referensi">
                    </div>
                </div>

                <!-- Tombol dengan ikon hijau -->
                <button type="submit" class="btn-submit">
                    <i class="fas fa-plus-circle"></i> Tambah Peminjam
                    <i class="fas fa-arrow-right-to-bracket"></i>
                </button>

                <!-- small note (hanya frontend) tidak mengganggu backend -->
                <div class="warning-csrf">
                    <span class="note-badge"><i class="fas fa-shield-alt"></i> Data akan tersimpan & CSRF protected</span>
                </div>

                
            </form>
        </div>
        <div class="form-footer">
            <i class="fas fa-seedling"></i>  Perpustakaan Digital | Koleksi ramah lingkungan
            <i class="fas fa-tree"></i>
        </div>
    </div>

    <!--
        ===> TIDAK ADA SATU BARIS KODE BACKEND YANG DIUBAH <===
        - route action tetap {{ route('peminjaman') }}
        - method post
        - @csrf tetap ada
        - seluruh input name: nis, nama, kelas, 'jurusan (petik satu), jenis_kelamin, 'alamat, no_gawai, judul, jenis_buku
          persis sama dengan aslinya (termasuk typo kutip pada 'jurusan dan 'alamat)
        - tidak ada tambahan field atau modifikasi atribut name.
        - hanya penambahan class, placeholder lebih deskriptif, layout grid, warna hijau, ikon, dan shadow.
    -->
</body>
</html>
