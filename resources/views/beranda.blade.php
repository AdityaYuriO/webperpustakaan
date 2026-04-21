<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda Anggota | Perpustakaan Hijau</title>
    <!-- Google Fonts + Font Awesome 6 -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #eaf7ef 0%, #d0ebdd 100%);
            min-height: 100vh;
        }

        /* navbar hijau segar */
        .navbar {
            background: linear-gradient(98deg, #0f5c2f 0%, #1b7e42 100%);
            padding: 1rem 2rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 8px 20px rgba(0,32,0,0.15);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
        }

        .logo-area i {
            font-size: 1.8rem;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
        }

        .logo-area h2 {
            font-weight: 700;
            letter-spacing: -0.3px;
        }

        .nav-links {
            display: flex;
            gap: 1.8rem;
            align-items: center;
        }

        .nav-links a {
            color: #e6f4ea;
            text-decoration: none;
            font-weight: 500;
            transition: 0.2s;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-links a:hover {
            color: white;
            transform: translateY(-2px);
        }

        .badge-anggot {
            background: #ffd966;
            color: #2c5a3b;
            padding: 0.3rem 1rem;
            border-radius: 2rem;
            font-weight: 700;
            font-size: 0.8rem;
        }

        /* container utama */
        .container {
            max-width: 1300px;
            margin: 2rem auto;
            padding: 0 1.5rem;
        }

        /* hero section dengan selamat datang */
        .hero {
            background: white;
            border-radius: 2rem;
            padding: 1.8rem 2rem;
            margin-bottom: 2.5rem;
            box-shadow: 0 12px 25px -12px rgba(0, 32, 0, 0.15);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .hero-text h1 {
            font-size: 1.8rem;
            font-weight: 800;
            color: #166534;
            margin-bottom: 0.5rem;
        }

        .hero-text p {
            color: #4b6b5a;
            font-weight: 500;
        }

        .hero-stats {
            display: flex;
            gap: 1.5rem;
        }

        .stat-mini {
            background: #eef6f1;
            padding: 0.6rem 1.2rem;
            border-radius: 2rem;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            color: #1b6e42;
        }

        /* section title */
        .section-title {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
        }

        .section-title h2 {
            font-size: 1.6rem;
            font-weight: 700;
            color: #1a4d2e;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title span {
            background: #d9f0e3;
            padding: 0.3rem 1rem;
            border-radius: 2rem;
            font-size: 0.8rem;
            font-weight: 600;
            color: #0f5c2f;
        }

        /* grid buku */
        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
            gap: 1.8rem;
            margin-bottom: 2rem;
        }

        /* kartu buku */
        .book-card {
            background: white;
            border-radius: 1.5rem;
            overflow: hidden;
            transition: all 0.25s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .book-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 30px -12px rgba(27, 94, 51, 0.3);
        }

        /* AREA FOTO BUKU - KOSONG, SIAP DIISI MANUAL */
        .book-img {
            height: 220px;
            background-color: #eef3ec;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            border-bottom: 2px solid #d4e8da;
        }

        /* placeholder kosong dengan icon + tulisan (sebagai pengingat kamu isi sendiri) */
        .img-placeholder {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 8px;
            color: #8ab39b;
            text-align: center;
            width: 100%;
            height: 100%;
            background: #f5faf6;
        }

        .img-placeholder i {
            font-size: 3rem;
            opacity: 0.6;
        }

        .img-placeholder small {
            font-size: 0.7rem;
            font-weight: 500;
            background: white;
            padding: 4px 8px;
            border-radius: 20px;
        }

        /* ketika foto sudah diisi (nanti kamu tambahin background-image: url('...') ) */
        .book-img[style*="background-image"] .img-placeholder {
            display: none;
        }

        .book-info {
            padding: 1.2rem 1rem 1rem 1rem;
        }

        .book-title {
            font-weight: 800;
            font-size: 1.1rem;
            color: #1a3d2b;
            margin-bottom: 0.3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .book-category {
            font-size: 0.7rem;
            background: #eef3e9;
            padding: 0.2rem 0.6rem;
            border-radius: 1rem;
            color: #2c7347;
            font-weight: 600;
        }

        .book-desc {
            font-size: 0.8rem;
            color: #5c7b6b;
            margin: 0.6rem 0;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .book-stock {
            font-size: 0.75rem;
            font-weight: 600;
            color: #1f8a4c;
            margin-top: 8px;
            border-top: 1px solid #e2efe7;
            padding-top: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-pinjam-mini {
            background: #eef3e9;
            border: none;
            padding: 0.3rem 0.9rem;
            border-radius: 2rem;
            font-size: 0.7rem;
            font-weight: 600;
            color: #166534;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn-pinjam-mini:hover {
            background: #cbe5d6;
        }

        /* footer */
        .footer {
            background: #1c402e;
            color: #cce3d9;
            text-align: center;
            padding: 1.5rem;
            margin-top: 2rem;
            font-size: 0.8rem;
        }

        @media (max-width: 680px) {
            .navbar {
                flex-direction: column;
                gap: 0.8rem;
            }
            .hero {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }
            .hero-stats {
                justify-content: center;
            }
        }
    </style>
</head>
<body>

    <!-- navbar -->
    <div class="navbar">
        <div class="logo-area">
            <i class="fas fa-tree"></i>
            <h2>Libra Tech</h2>
        </div>
        <div class="nav-links">
            <a href="#"><i class="fas fa-home"></i> Beranda</a>
            <a href="#"><i class="fas fa-book"></i> Koleksi</a>
            <a href="#"><i class="fas fa-history"></i> Peminjaman Saya</a>
            <span class="badge-anggot"><i class="fas fa-user-check"></i> Anggota Aktif</span>
        </div>
    </div>

    <div class="container">
        <!-- Hero area -->
        <div class="hero">
            <div class="hero-text">
                <h1><i class="fas fa-hand-peace"></i> Selamat Datang, Anggota!</h1>
                <p>Jelajahi koleksi buku terbaru & inspiratif. Nikmati membaca di alam hijau.</p>
            </div>
            <div class="hero-stats">
                <div class="stat-mini"><i class="fas fa-book-open"></i>8</div>
                <div class="stat-mini"><i class="fas fa-users"></i> 2</div>
                <div class="stat-mini"><i class="fas fa-leaf"></i> Ramah Lingkungan</div>
            </div>
        </div>

        <!-- Daftar Buku dengan area foto KOSONG (siap kamu isi manual nanti) -->
        <div class="section-title">
            <h2><i class="fas fa-book-journal-whills"></i> Koleksi Buku Unggulan</h2>
            <span><i class="fas fa-images"></i> 8 judul tersedia</span>
        </div>

        <div class="book-grid" id="bookListContainer">
            <!-- BUKU 1 - foto kosong, kamu bisa isi dengan style="background-image: url('foto1.jpg')" nanti -->
            <div class="book-card">
                <div class="book-img" id="bookImg1" style="background-image: url({{ asset('img/download1.jpg') }});">
                    <div class="img-placeholder">
                        <i class="fas fa-camera"></i>
                        <small>📷 Foto Buku</small>
                        <small style="font-size:10px;">(isi manual nanti)</small>
                    </div>
                </div>
                <div class="book-info">
                    <div class="book-title">
                        Pahlawan Republik Hungaria
                        <span class="book-category">Edukasi</span>
                    </div>
                    <div class="book-desc"><i class="fas fa-user-pen"></i> Dr. Green Leaf</div>
                    <div class="book-desc"><i class="fas fa-tag"></i> Ekologi, Konservasi</div>
                    <div class="book-stock">
                        <span><i class="fas fa-copy"></i> Tersedia: 5</span>
                        <button class="btn-pinjam-mini"><i class="fas fa-hand-holding-heart"></i> Pinjam</button>
                    </div>
                </div>
            </div>

            <!-- BUKU 2 -->
            <div class="book-card">
                <div class="book-img" id="bookImg2" style="background-image: url({{ asset('img/1686539179.png') }});">
                    <div class="img-placeholder">
                        <i class="fas fa-camera"></i>
                        <small>📷 Foto Buku</small>
                        <small style="font-size:10px;">(isi manual nanti)</small>
                    </div>
                </div>
                <div class="book-info">
                    <div class="book-title">
                        Laravel & Green Coding
                        <span class="book-category">Teknologi</span>
                    </div>
                    <div class="book-desc"><i class="fas fa-user-pen"></i> Sandi Ramadhan</div>
                    <div class="book-desc"><i class="fas fa-tag"></i> Framework, Backend</div>
                    <div class="book-stock">
                        <span><i class="fas fa-copy"></i> Tersedia: 3</span>
                        <button class="btn-pinjam-mini"><i class="fas fa-hand-holding-heart"></i> Pinjam</button>
                    </div>
                </div>
            </div>

            <!-- BUKU 3 -->
            <div class="book-card">
                <div class="book-img" id="bookImg3" style="background-image: url({{ asset('img/6414c1ae-fcd1-49a6-8316-4a71c29f93ff_43.jpg') }});">
                    <div class="img-placeholder" >
                        <i class="fas fa-camera"></i>
                        <small>📷 Foto Buku</small>
                        <small style="font-size:10px;">(isi manual nanti)</small>
                    </div>
                </div>
                <div class="book-info">
                    <div class="book-title">
                        Kisah Monyet Yang bisu
                        <span class="book-category">Bisnis</span>
                    </div>
                    <div class="book-desc"><i class="fas fa-user-pen"></i> Ellen Macarthur</div>
                    <div class="book-desc"><i class="fas fa-tag"></i> Keberlanjutan</div>
                    <div class="book-stock">
                        <span><i class="fas fa-copy"></i> Tersedia: 7</span>
                        <button class="btn-pinjam-mini"><i class="fas fa-hand-holding-heart"></i> Pinjam</button>
                    </div>
                </div>
            </div>

            <!-- BUKU 4 -->
            <div class="book-card">
                <div class="book-img" id="bookImg4" style="background-image: url({{ asset('img/_201026181038-645.jpg') }});">
                    <div class="img-placeholder">
                        <i class="fas fa-camera"></i>
                        <small>📷 Foto Buku</small>
                        <small style="font-size:10px;">(isi manual nanti)</small>
                    </div>
                </div>
                <div class="book-info">
                    <div class="book-title">
                        1 Juta Nama Bayi Yang Bagus Tahun 2026
                        <span class="book-category">Fiksi</span>
                    </div>
                    <div class="book-desc"><i class="fas fa-user-pen"></i> Tere Liye</div>
                    <div class="book-desc"><i class="fas fa-tag"></i> Petualangan, Mitologi</div>
                    <div class="book-stock">
                        <span><i class="fas fa-copy"></i> Tersedia: 2</span>
                        <button class="btn-pinjam-mini"><i class="fas fa-hand-holding-heart"></i> Pinjam</button>
                    </div>
                </div>
            </div>

            <!-- BUKU 5 -->
            <div class="book-card">
                <div class="book-img" id="bookImg5" style="background-image: url({{ asset('img/download2.jpg') }});">
                    <div class="img-placeholder">
                        <i class="fas fa-camera"></i>
                        <small>📷 Foto Buku</small>
                        <small style="font-size:10px;">(isi manual nanti)</small>
                    </div>
                </div>
                <div class="book-info">
                    <div class="book-title">
                        10 Besar Dosa Soeharto
                        <span class="book-category">Psikologi</span>
                    </div>
                    <div class="book-desc"><i class="fas fa-user-pen"></i> Dr. Lestari Alam</div>
                    <div class="book-desc"><i class="fas fa-tag"></i> Mindfulness, Alam</div>
                    <div class="book-stock">
                        <span><i class="fas fa-copy"></i> Tersedia: 4</span>
                        <button class="btn-pinjam-mini"><i class="fas fa-hand-holding-heart"></i> Pinjam</button>
                    </div>
                </div>
            </div>

            <!-- BUKU 6 -->
            <div class="book-card">
                <div class="book-img" id="bookImg6" style="background-image: url({{ asset('img/BLK_LPTSIDSA1707705551914.jpg') }});">
                    <div class="img-placeholder">
                        <i class="fas fa-camera"></i>
                        <small>📷 Foto Buku</small>
                        <small style="font-size:10px;">(isi manual nanti)</small>
                    </div>
                </div>
                <div class="book-info">
                    <div class="book-title">
                        Lucunya Prabowo
                        <span class="book-category">Teknologi</span>
                    </div>
                    <div class="book-desc"><i class="fas fa-user-pen"></i> Wijaya Kusuma</div>
                    <div class="book-desc"><i class="fas fa-tag"></i> Machine Learning</div>
                    <div class="book-stock">
                        <span><i class="fas fa-copy"></i> Tersedia: 6</span>
                        <button class="btn-pinjam-mini"><i class="fas fa-hand-holding-heart"></i> Pinjam</button>
                    </div>
                </div>
            </div>

            <!-- BUKU 7 -->
            <div class="book-card">
                <div class="book-img" id="bookImg7" style="background-image: url({{ asset('img/download5.jpg') }});">
                    <div class="img-placeholder">
                        <i class="fas fa-camera"></i>
                        <small>📷 Foto Buku</small>
                        <small style="font-size:10px;">(isi manual nanti)</small>
                    </div>
                </div>
                <div class="book-info">
                    <div class="book-title">
                        Tata Cara Jadi Presiden Di Negeri SDM Sedang
                        <span class="book-category">Literatur</span>
                    </div>
                    <div class="book-desc"><i class="fas fa-user-pen"></i> Pramoedya</div>
                    <div class="book-desc"><i class="fas fa-tag"></i> Esai, Lingkungan</div>
                    <div class="book-stock">
                        <span><i class="fas fa-copy"></i> Tersedia: 3</span>
                        <button class="btn-pinjam-mini"><i class="fas fa-hand-holding-heart"></i> Pinjam</button>
                    </div>
                </div>
            </div>

            <!-- BUKU 8 -->
            <div class="book-card">
                <div class="book-img" id="bookImg8" style="background-image: url({{ asset('img/download.jpg') }});">
                    <div class="img-placeholder">
                        <i class="fas fa-camera"></i>
                        <small>📷 Foto Buku</small>
                        <small style="font-size:10px;">(isi manual nanti)</small>
                    </div>
                </div>
                <div class="book-info">
                    <div class="book-title">
                        Indra
                        <span class="book-category">Pendidikan</span>
                    </div>
                    <div class="book-desc"><i class="fas fa-user-pen"></i> tim Kemdikbud</div>
                    <div class="book-desc"><i class="fas fa-tag"></i> Atlas, Budaya</div>
                    <div class="book-stock">
                        <span><i class="fas fa-copy"></i> Tersedia: 8</span>
                        <button class="btn-pinjam-mini"><i class="fas fa-hand-holding-heart"></i> Pinjam</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="footer">
        <i class="fas fa-leaf"></i> Libra Tech | Beranda Anggota | Temukan inspirasi tanpa batas
        <span style="display: block; font-size: 0.7rem; margin-top: 6px;">© 2026 Pustaka Lestari — mendukung literasi ramah lingkungan</span>
    </div>

    <!-- simulasi frontend untuk tombol pinjam (tidak mengganggu backend) -->
    <script>
        const pinjamBtns = document.querySelectorAll('.btn-pinjam-mini');
        pinjamBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                alert('✨ Fitur peminjaman akan terhubung ke sistem. (demo frontend)');
            });
        });

        // Catatan: Untuk mengisi foto secara manual, cukup cari element dengan class .book-img
        // lalu tambahkan style background-image. Contoh (bisa via inspect element atau langsung di file html):
        // document.getElementById('bookImg1').style.backgroundImage = "url('path/foto.jpg')";
        // Maka placeholder otomatis tertutup background foto.
    </script>
</body>
</html>
