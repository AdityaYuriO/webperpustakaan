<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Petugas | Dashboard Peminjaman</title>
    <!-- Google Fonts + Font Awesome 6 -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(145deg, #eaf7ef 0%, #d0ebdd 100%);
            min-height: 100vh;
            padding: 2rem 1.5rem;
        }

        /* Container utama */
        .dashboard-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Header card dengan nuansa hijau */
        .header-card {
            background: #ffffff;
            border-radius: 2rem;
            box-shadow: 0 12px 28px -8px rgba(0, 48, 24, 0.2);
            padding: 1.5rem 2rem;
            margin-bottom: 2rem;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            transition: all 0.2s;
        }

        .title-section h1 {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(135deg, #166534, #2b8c4a);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: -0.3px;
            display: inline-flex;
            align-items: center;
            gap: 12px;
        }

        .title-section h1 i {
            background: none;
            -webkit-background-clip: unset;
            background-clip: unset;
            color: #1e7e46;
            font-size: 2rem;
        }

        .title-section p {
            color: #4c7b62;
            font-weight: 500;
            margin-top: 6px;
            font-size: 0.9rem;
        }

        /* tombol tambah peminjaman - hijau segar */
        .btn-add {
            background: linear-gradient(98deg, #0f6837, #219653);
            border: none;
            padding: 0.85rem 1.8rem;
            border-radius: 3rem;
            font-weight: 700;
            font-size: 1rem;
            color: white;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 6px 14px rgba(33, 150, 83, 0.35);
            text-decoration: none;
        }

        .btn-add i {
            font-size: 1.1rem;
        }

        .btn-add:hover {
            background: linear-gradient(98deg, #0b562e, #1a7a48);
            transform: translateY(-2px);
            box-shadow: 0 12px 22px rgba(27, 94, 51, 0.3);
        }

        /* statistik sederhana (opsional, tetap frontend murni) */
        .stats-row {
            display: flex;
            flex-wrap: wrap;
            gap: 1.2rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            border-radius: 1.5rem;
            padding: 1rem 1.8rem;
            flex: 1;
            min-width: 160px;
            display: flex;
            align-items: center;
            gap: 1rem;
            box-shadow: 0 5px 12px rgba(0,0,0,0.05);
            border-left: 6px solid #2b8c4a;
        }

        .stat-icon {
            background: #e6f4ea;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 2rem;
            font-size: 1.6rem;
            color: #197e48;
        }

        .stat-info h3 {
            font-size: 1.8rem;
            font-weight: 800;
            color: #1b4d2e;
        }
        .stat-info p {
            color: #658d74;
            font-weight: 500;
            font-size: 0.8rem;
        }

        /* tabel modern */
        .table-wrapper {
            background: white;
            border-radius: 1.8rem;
            overflow-x: auto;
            box-shadow: 0 18px 35px -12px rgba(0, 32, 0, 0.2);
            backdrop-filter: blur(0px);
            transition: all 0.2s;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.9rem;
            min-width: 800px;
        }

        .data-table th {
            background: #1a4d2e;
            color: white;
            padding: 1rem 1.2rem;
            text-align: left;
            font-weight: 600;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .data-table th i {
            margin-right: 8px;
            font-size: 0.8rem;
        }

        .data-table td {
            padding: 1rem 1.2rem;
            border-bottom: 1px solid #e2efe7;
            color: #1e3a2f;
            font-weight: 500;
            vertical-align: middle;
        }

        .data-table tr:hover {
            background: #f6fef9;
            transition: 0.1s;
        }

        /* tombol hapus merah yang halus */
        .delete-btn {
            background: #fee2e2;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 2rem;
            color: #b91c1c;
            font-weight: 600;
            font-size: 0.75rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            transition: all 0.2s;
            font-family: 'Inter', sans-serif;
        }

        .delete-btn i {
            font-size: 0.8rem;
        }

        .delete-btn:hover {
            background: #fecaca;
            color: #991b1b;
            transform: scale(0.96);
        }

        /* empty state */
        .empty-row td {
            text-align: center;
            padding: 2.5rem;
            color: #699e82;
            font-weight: 500;
        }

        /* footer */
        .footer-note {
            text-align: center;
            margin-top: 2rem;
            font-size: 0.75rem;
            color: #4d7b64;
            font-weight: 500;
            background: rgba(255,255,240,0.6);
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
            padding: 0.5rem 1.2rem;
            border-radius: 2rem;
            backdrop-filter: blur(2px);
        }

        @media (max-width: 780px) {
            .header-card {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            .stats-row {
                flex-direction: column;
            }
            .data-table th, .data-table td {
                padding: 0.8rem;
            }
        }
    </style>
</head>
<body>
<div class="dashboard-container">
    <!-- Header dengan tombol tambah peminjaman (link original) -->
    <div class="header-card">
        <div class="title-section">
            <h1>
                <i class="fas fa-users-viewfinder"></i>
                Panel Petugas Perpustakaan
            </h1>
            <p><i class="fas fa-seedling"></i>  Daftar peminjaman aktif  |  sistem hijau & ramah data</p>
        </div>
        <div>
            <!-- BACKEND TIDAK DIUBAH: route halaman.peminjaman tetap persis, href asli -->
            <a href="{{ route('halaman.peminjaman') }}" class="btn-add">
                <i class="fas fa-plus-circle"></i> Tambah Peminjaman
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>

    <!-- Mini stats (frontend murni, hitung jumlah data dari $peminjam) -->
    <div class="stats-row">
        <div class="stat-card">
            <div class="stat-icon"><i class="fas fa-user-check"></i></div>
            <div class="stat-info">
                <h3>{{ count($peminjam ?? []) }}</h3>
                <p>Total Peminjam</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon"><i class="fas fa-book"></i></div>
            <div class="stat-info">
                <h3>{{ count($peminjam ?? []) }}</h3>
                <p>Buku Dipinjam</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon"><i class="fas fa-phone-alt"></i></div>
            <div class="stat-info">
                <h3><i class="fas fa-shield-alt"></i> Aktif</h3>
                <p>Data Tersimpan</p>
            </div>
        </div>
    </div>

    <!-- TABEL PEMINJAMAN: backend tidak berubah, seluruh atribut dan blade syntax asli -->
    <div class="table-wrapper">
        <table class="data-table">
            <thead>
                <tr>
                    <th><i class="fas fa-id-badge"></i> NIS</th>
                    <th><i class="fas fa-user"></i> Nama</th>
                    <th><i class="fas fa-layer-group"></i> Kelas</th>
                    <th><i class="fas fa-graduation-cap"></i> Jurusan</th>
                    <th><i class="fas fa-book-open"></i> Judul</th>
                    <th><i class="fas fa-tags"></i> Jenis Buku</th>
                    <th><i class="fas fa-mobile-alt"></i> No Gawai</th>
                    <th><i class="fas fa-trash-alt"></i> Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $peminjam as $pmjn)
                <tr>
                    <td><span class="nis-badge">{{ $pmjn->nis }}</span></td>
                    <td><strong>{{ $pmjn->nama }}</strong></td>
                    <td>{{ $pmjn->kelas }}</td>
                    <td>{{ $pmjn->jurusan }}</td>
                    <td><i class="fas fa-bookmark" style="color:#2b8c4a; margin-right:6px;"></i> {{ $pmjn->Judul }}</td>
                    <td>{{ $pmjn->jenis_buku }}</td>
                    <td>{{ $pmjn->nomor_gawai }}</td>
                    <td>
                        <!-- FORM HAPUS: 100% original, tidak diubah -->
                        <form action="{{ route('hapus.peminjaman', $pmjn->id) }}" method="post" onsubmit="return confirm('hapus?')" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">
                                <i class="fas fa-trash-can"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

                @if(count($peminjam ?? []) === 0)
                <tr class="empty-row">
                    <td colspan="8" style="text-align: center; padding: 2.5rem;">
                        <i class="fas fa-inbox" style="font-size: 2rem; opacity: 0.6; display: block; margin-bottom: 8px;"></i>
                        Belum ada data peminjam. <br> Klik tombol <strong>"Tambah Peminjaman"</strong> untuk menambahkan.
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    <div class="footer-note">
        <i class="fas fa-leaf"></i>  Perpustakaan Hijau  |  Data peminjaman aman & realtime  <i class="fas fa-tree"></i>
    </div>
</div>

</body>
</html>
