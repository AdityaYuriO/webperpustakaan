<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Form Pembuatan Akun - Sistem Manajemen Pengguna</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            font-family: 'Inter', 'Segoe UI', 'Poppins', system-ui, -apple-system, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        .form-container {
            background: #ffffff;
            border-radius: 32px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
            max-width: 780px;
            width: 100%;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .form-header {
            background: linear-gradient(120deg, #1e2a3a, #0f172a);
            padding: 1.8rem 2rem;
            color: white;
        }

        .form-header h1 {
            font-size: 1.9rem;
            font-weight: 700;
            letter-spacing: -0.3px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .form-header h1::before {
            content: "👥";
            font-size: 2rem;
        }

        .form-header p {
            margin-top: 0.6rem;
            font-size: 0.9rem;
            opacity: 0.85;
        }

        .form-body {
            padding: 2rem 2rem 2rem 2rem;
        }

        .form-group {
            margin-bottom: 1.4rem;
            display: flex;
            flex-direction: column;
        }

        .form-row {
            display: flex;
            gap: 1.2rem;
            flex-wrap: wrap;
        }

        .form-row .form-group {
            flex: 1;
            min-width: 160px;
        }

        label {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #1e293b;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        label i {
            font-style: normal;
            font-weight: normal;
            font-size: 1rem;
        }

        .required-star {
            color: #e11d48;
            font-size: 1rem;
            margin-left: 2px;
        }

        input, select, textarea {
            border: 1.5px solid #e2e8f0;
            border-radius: 20px;
            padding: 12px 18px;
            font-size: 0.95rem;
            font-family: inherit;
            transition: all 0.2s ease;
            background-color: #fefefe;
            outline: none;
            width: 100%;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
            background-color: #fff;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        .password-wrapper {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            user-select: none;
            font-size: 1.1rem;
            background: transparent;
            border: none;
            font-weight: 600;
            color: #6b7280;
            padding: 4px 8px;
            border-radius: 30px;
        }

        .error-msg {
            font-size: 0.75rem;
            margin-top: 6px;
            color: #e11d48;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .success-text {
            color: #10b981;
            font-size: 0.75rem;
            margin-top: 6px;
        }

        .role-status-row {
            display: flex;
            gap: 1.2rem;
            flex-wrap: wrap;
        }

        .role-status-row .form-group {
            flex: 1;
        }

        select {
            cursor: pointer;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="%234b5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>');
            background-repeat: no-repeat;
            background-position: right 1rem center;
            appearance: none;
        }

        .btn-submit {
            background: linear-gradient(95deg, #4f46e5, #7c3aed);
            border: none;
            width: 100%;
            padding: 14px;
            border-radius: 40px;
            font-weight: bold;
            font-size: 1rem;
            color: white;
            cursor: pointer;
            transition: 0.2s;
            margin-top: 0.5rem;
            box-shadow: 0 8px 20px rgba(79, 70, 229, 0.3);
            font-family: inherit;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            background: linear-gradient(95deg, #4338ca, #6d28d9);
            box-shadow: 0 12px 24px -8px rgba(79, 70, 229, 0.5);
        }

        .btn-submit:active {
            transform: translateY(1px);
        }

        .alert-message {
            background: #f1f5f9;
            border-radius: 20px;
            padding: 1rem;
            margin-bottom: 1.5rem;
            font-size: 0.85rem;
            border-left: 5px solid #4f46e5;
        }

        hr {
            margin: 0.5rem 0 1.2rem;
            border: none;
            height: 1px;
            background: linear-gradient(to right, #e2e8f0, transparent);
        }

        @media (max-width: 640px) {
            .form-body {
                padding: 1.5rem;
            }
            .form-header h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
<div class="form-container">
    <div class="form-header">
        <h1>Buat Akun Baru</h1>
        <p>Lengkapi data diri dengan benar untuk registrasi akun</p>
    </div>
    <div class="form-body">
        <div class="alert-message" id="liveAlert" style="display: none;">
            ⚡ Silakan periksa kembali data yang diperlukan
        </div>

        <form id="registrationForm" onsubmit="return handleSubmit(event)">
            <!-- USERNAME -->
            <div class="form-group">
                <label>
                    <i>👤</i> Username <span class="required-star">*</span>
                </label>
                <input type="text" id="username" name="username" placeholder="contoh: ahmad_fadli" autocomplete="off" required>
                <div class="error-msg" id="usernameError" style="display: none;"></div>
            </div>

            <!-- PASSWORD & KONFIRMASI PASSWORD (row) -->
            <div class="form-row">
                <div class="form-group">
                    <label>
                        <i>🔒</i> Password <span class="required-star">*</span>
                    </label>
                    <div class="password-wrapper">
                        <input type="password" id="password" name="password" placeholder="Minimal 6 karakter" required>
                        <button type="button" class="toggle-password" data-target="password">👁️</button>
                    </div>
                    <div class="error-msg" id="passwordError" style="display: none;"></div>
                </div>
                <div class="form-group">
                    <label>
                        <i>✓</i> Konfirmasi Password <span class="required-star">*</span>
                    </label>
                    <div class="password-wrapper">
                        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Ulangi password" required>
                        <button type="button" class="toggle-password" data-target="confirmPassword">👁️</button>
                    </div>
                    <div class="error-msg" id="confirmError" style="display: none;"></div>
                </div>
            </div>

            <!-- NAMA LENGKAP -->
            <div class="form-group">
                <label>
                    <i>📛</i> Nama Lengkap <span class="required-star">*</span>
                </label>
                <input type="text" id="fullname" name="fullname" placeholder="Nama sesuai identitas" required>
                <div class="error-msg" id="fullnameError" style="display: none;"></div>
            </div>

            <!-- NIS & KELAS (row) -->
            <div class="form-row">
                <div class="form-group">
                    <label><i>🆔</i> NIS</label>
                    <input type="text" id="nis" name="nis" placeholder="Nomor Induk Siswa (opsional)">
                </div>
                <div class="form-group">
                    <label><i>🏫</i> Kelas</label>
                    <input type="text" id="kelas" name="kelas" placeholder="Contoh: XI RPL 2">
                </div>
            </div>

            <!-- ALAMAT -->
            <div class="form-group">
                <label><i>🏠</i> Alamat</label>
                <textarea id="alamat" name="alamat" placeholder="Jl. Merdeka No. 12, RT/RW ..."></textarea>
            </div>

            <!-- NOMOR HP -->
            <div class="form-group">
                <label><i>📞</i> Nomor HP</label>
                <input type="tel" id="phone" name="phone" placeholder="08xx-xxxx-xxxx">
                <div class="error-msg" id="phoneError" style="display: none;"></div>
            </div>

            <!-- ROLE & STATUS (siswa, guru, petugas + Active/Banned) -->
            <div class="role-status-row">
                <div class="form-group">
                    <label><i>🎭</i> Role <span class="required-star">*</span></label>
                    <select id="role" name="role" required>
                        <option value="" disabled selected>– Pilih Role –</option>
                        <option value="siswa">Siswa</option>
                        <option value="guru">Guru</option>
                        <option value="petugas">Petugas</option>
                    </select>
                    <div class="error-msg" id="roleError" style="display: none;"></div>
                </div>
                <div class="form-group">
                    <label><i>⚡</i> Status <span class="required-star">*</span></label>
                    <select id="status" name="status" required>
                        <option value="" disabled selected>– Pilih Status –</option>
                        <option value="Active">Active</option>
                        <option value="Banned">Banned</option>
                    </select>
                    <div class="error-msg" id="statusError" style="display: none;"></div>
                </div>
            </div>

            <hr>

            <button type="submit" class="btn-submit">✨ Buat Akun ✨</button>
        </form>

        <!-- Modal / Toast sederhana untuk preview data (simulasi sukses) -->
        <div id="successModal" style="display: none; margin-top: 1rem; background: #e6f7e6; border-radius: 24px; padding: 1rem; border-left: 6px solid #10b981;">
            <strong>✅ Akun berhasil dibuat!</strong>
            <pre id="previewData" style="margin-top: 10px; background: #fff; padding: 12px; border-radius: 16px; font-size: 0.8rem; overflow-x: auto;"></pre>
            <button onclick="closeModal()" style="background: #2c3e50; border: none; color: white; padding: 8px 16px; border-radius: 30px; margin-top: 8px; cursor: pointer;">Tutup</button>
        </div>
    </div>
</div>

<script>
    // Toggle password visibility untuk kedua field password
    const toggleButtons = document.querySelectorAll('.toggle-password');
    toggleButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const input = document.getElementById(targetId);
            if (input) {
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                this.textContent = type === 'password' ? '👁️' : '🙈';
            }
        });
    });

    // Fungsi validasi realtime (opsional) dan submit handler
    function validateForm() {
        let isValid = true;

        // Reset semua error
        document.querySelectorAll('.error-msg').forEach(el => el.style.display = 'none');
        const alertBox = document.getElementById('liveAlert');
        alertBox.style.display = 'none';

        // 1. Username: tidak boleh kosong, minimal 3 karakter
        const username = document.getElementById('username').value.trim();
        if (username === '') {
            showError('usernameError', 'Username tidak boleh kosong');
            isValid = false;
        } else if (username.length < 3) {
            showError('usernameError', 'Username minimal 3 karakter');
            isValid = false;
        } else if (!/^[a-zA-Z0-9_]+$/.test(username)) {
            showError('usernameError', 'Hanya huruf, angka dan underscore diperbolehkan');
            isValid = false;
        }

        // 2. Password validasi
        const password = document.getElementById('password').value;
        const confirm = document.getElementById('confirmPassword').value;
        if (password === '') {
            showError('passwordError', 'Password harus diisi');
            isValid = false;
        } else if (password.length < 6) {
            showError('passwordError', 'Password minimal 6 karakter');
            isValid = false;
        }

        if (confirm === '') {
            showError('confirmError', 'Konfirmasi password wajib diisi');
            isValid = false;
        } else if (password !== confirm) {
            showError('confirmError', 'Password dan konfirmasi tidak cocok');
            isValid = false;
        }

        // 3. Nama lengkap
        const fullname = document.getElementById('fullname').value.trim();
        if (fullname === '') {
            showError('fullnameError', 'Nama lengkap tidak boleh kosong');
            isValid = false;
        } else if (fullname.length < 3) {
            showError('fullnameError', 'Nama lengkap minimal 3 karakter');
            isValid = false;
        }

        // 4. Nomor HP (validasi opsional jika diisi, cek format minimal angka)
        const phone = document.getElementById('phone').value.trim();
        if (phone !== '') {
            const phoneRegex = /^[0-9+\-\s()]+$/;
            if (!phoneRegex.test(phone)) {
                showError('phoneError', 'Nomor HP hanya boleh mengandung angka, spasi, + atau -');
                isValid = false;
            } else if (phone.replace(/[^0-9]/g, '').length < 9) {
                showError('phoneError', 'Nomor HP terlalu pendek (minimal 9 digit)');
                isValid = false;
            }
        }

        // 5. Role harus dipilih (tidak kosong)
        const role = document.getElementById('role').value;
        if (!role) {
            showError('roleError', 'Silakan pilih Role (Siswa/Guru/Petugas)');
            isValid = false;
        }

        // 6. Status harus dipilih (Active/Banned)
        const status = document.getElementById('status').value;
        if (!status) {
            showError('statusError', 'Status akun harus dipilih (Active atau Banned)');
            isValid = false;
        }

        // Optional: NIS hanya berupa angka jika diisi (bukan wajib tapi memberikan saran)
        const nis = document.getElementById('nis').value.trim();
        if (nis !== '' && isNaN(nis.replace(/\s/g, ''))) {
            // tidak bikin error total, hanya tampilkan warning kecil tanpa mengganggu submit? lebih baik kasih warning tapi tetap bisa lanjut? biar clean, tampilkan error ringan optional
            // agar form konsisten, jika ingin strict boleh tapi karena tidak required, hanya pesan non-blocking? kita beri error saja tapi tidak membatalkan? biar rapih, untuk menjaga kualitas data, kita tampilkan error tapi tidak memblock jika bukan wajib?
            // lebih baik tampilkan error dan minta perbaiki, tapi karena NIS tidak wajib sebenarnya, tapi kebanyakan sekolah ingin numeric. Saya buat validasi tidak menggagalkan submit tapi muncul saran. Tapi untuk profesional, lebih baik memblock jika format salah jika diisi.
            if (nis !== '' && !/^\d+$/.test(nis)) {
                showError('usernameError', 'NIS sebaiknya hanya berisi angka (opsional, tetapi format salah)');
                // untuk pengalaman lebih baik tidak memblock total? block saja supaya data bersih.
                isValid = false;
                document.getElementById('usernameError').innerHTML = '⚠️ NIS hanya boleh angka jika diisi';
                document.getElementById('usernameError').style.display = 'flex';
            }
        }

        // validasi tambahan kelas jika ingin tidak ada masalah (opsional)
        return isValid;
    }

    function showError(elementId, message) {
        const errorDiv = document.getElementById(elementId);
        if (errorDiv) {
            errorDiv.innerHTML = message;
            errorDiv.style.display = 'flex';
        }
    }

    // Preview data setelah sukses (simulasi pengiriman ke server)
    function handleSubmit(event) {
        event.preventDefault();

        if (!validateForm()) {
            const alertBox = document.getElementById('liveAlert');
            alertBox.style.display = 'block';
            alertBox.innerHTML = '⚠️ Gagal membuat akun. Periksa kembali field yang bertanda merah.';
            alertBox.style.background = '#fee2e2';
            alertBox.style.borderLeftColor = '#e11d48';
            setTimeout(() => {
                if (alertBox) alertBox.style.opacity = '0.9';
            }, 10);
            return false;
        }

        // Ambil semua data dari form
        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value;
        const fullname = document.getElementById('fullname').value.trim();
        const nis = document.getElementById('nis').value.trim() || '-';
        const kelas = document.getElementById('kelas').value.trim() || '-';
        const alamat = document.getElementById('alamat').value.trim() || '-';
        const phone = document.getElementById('phone').value.trim() || '-';
        const role = document.getElementById('role').value;
        const status = document.getElementById('status').value;

        // Mapping role ke tampilan lebih bagus
        let roleDisplay = '';
        if (role === 'siswa') roleDisplay = 'Siswa';
        else if (role === 'guru') roleDisplay = 'Guru';
        else if (role === 'petugas') roleDisplay = 'Petugas';

        const statusDisplay = status === 'Active' ? '✅ Active' : '⛔ Banned';

        // Susun data ringkas untuk preview
        const previewText = `
📋 DATA AKUN BARU
━━━━━━━━━━━━━━━━━━━━━━━━
👤 Username      : ${username}
🔑 Password      : ${'*'.repeat(password.length)}
👤 Nama Lengkap  : ${fullname}
🆔 NIS           : ${nis}
🏫 Kelas         : ${kelas}
🏠 Alamat        : ${alamat}
📞 No. HP        : ${phone}
🎭 Role          : ${roleDisplay}
⚡ Status        : ${statusDisplay}
━━━━━━━━━━━━━━━━━━━━━━━━
✅ Registrasi berhasil (simulasi).
        `;

        // Tampilkan modal sukses
        const modal = document.getElementById('successModal');
        const previewElem = document.getElementById('previewData');
        if (previewElem) previewElem.innerText = previewText;
        modal.style.display = 'block';

        // Opsional: reset form (jika ingin, tapi tidak wajib, biarkan user lihat data dulu)
        // Scroll ke modal
        modal.scrollIntoView({ behavior: 'smooth', block: 'center' });

        // Bisa juga reset form setelah user close, tapi kita biarkan user reset manual atau close.
        return false;
    }

    function closeModal() {
        const modal = document.getElementById('successModal');
        modal.style.display = 'none';
        // optional reset form (comment jika tidak ingin reset otomatis)
        // document.getElementById('registrationForm').reset();
        // reset error display juga
        document.querySelectorAll('.error-msg').forEach(el => el.style.display = 'none');
        document.getElementById('liveAlert').style.display = 'none';
    }

    // tambahkan realtime password match check untuk kenyamanan
    const confirmInput = document.getElementById('confirmPassword');
    const passwordInput = document.getElementById('password');
    function checkMatchRealtime() {
        const pass = passwordInput.value;
        const conf = confirmInput.value;
        const confirmErrorDiv = document.getElementById('confirmError');
        if (conf.length > 0 && pass !== conf) {
            confirmErrorDiv.innerHTML = 'Password tidak cocok';
            confirmErrorDiv.style.display = 'flex';
        } else if (conf.length > 0 && pass === conf) {
            confirmErrorDiv.style.display = 'none';
        } else if (conf.length === 0) {
            confirmErrorDiv.style.display = 'none';
        }
    }
    passwordInput.addEventListener('input', checkMatchRealtime);
    confirmInput.addEventListener('input', checkMatchRealtime);

    // validasi live sederhana untuk username
    const usernameField = document.getElementById('username');
    usernameField.addEventListener('blur', function() {
        const val = this.value.trim();
        const errDiv = document.getElementById('usernameError');
        if (val === '') {
            showError('usernameError', 'Username tidak boleh kosong');
        } else if (val.length < 3) {
            showError('usernameError', 'Minimal 3 karakter');
        } else if (!/^[a-zA-Z0-9_]+$/.test(val)) {
            showError('usernameError', 'Hanya huruf, angka & underscore');
        } else {
            errDiv.style.display = 'none';
        }
    });
</script>
</body>
</html>
