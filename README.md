# Laravel SB Admin 2 — Projek Lokal

README ini disesuaikan untuk proyek Laravel yang berisi template SB Admin (versi demo) dan fitur otentikasi sederhana (login/register/logout) dengan dashboard terpisah untuk admin dan user.

## Ringkasan singkat
- Framework: Laravel
- Template: SB Admin (file HTML/CSS/JS berada di `public/template` — demo HTML telah dipindahkan/diarsipkan, asset tetap digunakan)
- Database: SQLite (default untuk lingkungan development)
- Auth: Register, Login, Logout, middleware `admin` untuk akses dashboard admin

## Prasyarat
- PHP (versi 8+ direkomendasikan)
- Composer
- (Opsional) Node.js & npm jika ingin membangun aset frontend
- SQLite (tidak wajib di-install — file DB adalah file biasa)

## Langkah cepat untuk menjalankan (Windows / cmd.exe)
1. Clone atau buka folder proyek:

```cmd
cd /d D:\laragon\www\LaravelSBAdmin2
```

2. Install dependensi PHP dengan Composer (jika belum):

```cmd
composer install
```

3. Siapkan file environment (`.env`) — sudah ada contoh `.env` di repo. Pastikan `APP_KEY` ter-set dan `DB_CONNECTION=sqlite`.

4. Buat file database SQLite (jika belum ada):

```cmd
type NUL > database\database.sqlite
```

5. Generate key aplikasi dan jalankan migrasi + seed admin:

```cmd
php artisan key:generate --force
php artisan migrate --force
php artisan db:seed --class=AdminSeeder
```

6. Jalankan server development:

```cmd
php artisan serve --host=127.0.0.1 --port=8000
```

Buka browser ke: `http://127.0.0.1:8000`

## Kredensial admin (seed lokal)
- Email: `admin@example.com`
- Password: `password`

> GANTI password ini jika proyek akan dipakai oleh orang lain atau dipublikasikan.

## Struktur penting (direktori yang relevan)
- `app/Http/Controllers/Auth/` — controller auth (login/register/logout)
- `app/Http/Middleware/AdminMiddleware.php` — middleware untuk rute admin
- `app/Models/User.php` — model user (memiliki field `is_admin`)
- `routes/web.php` — rute aplikasi (auth + dashboard)
- `resources/views/admin/` — layout & view khusus admin
- `resources/views/user/` — layout & view khusus user
- `resources/views/auth/` — login & register (menggunakan `layouts/template-auth.blade.php`)
- `public/template/` — folder asset (css/js/assets) dari template SB Admin
- `database/database.sqlite` — file SQLite (dibuat di langkah setup)

## Waktu / Timezone
Aplikasi membaca timezone dari `.env` melalui `APP_TIMEZONE`. Default yang diset untuk development adalah `Asia/Jakarta`. Ubah jika perlu.

## Pembersihan file sementara
Beberapa file sementara (mis. `login.html`, `token.txt`, `login_response.html`, `cookie.txt`) dibuat selama pengujian — sudah dihapus dari root repo agar tidak berantakan.

Jika Anda menemukan file sementara lain, hapus atau pindahkan ke folder `tmp/` atau `storage/tmp/` dan tambahkan aturan `.gitignore` agar tidak ikut ter-commit.

## Tips pengembangan
- Jika perlu menyesuaikan tampilan, ubah layout di `resources/views/admin/layouts/app.blade.php` dan `resources/views/user/layouts/app.blade.php`.
- Ekstrak header/sidebar/footer ke `resources/views/partials/` jika ingin mengurangi duplikasi.
- Untuk production, ubah `SESSION_DRIVER` dan konfigurasi cache/queue sesuai kebutuhan.

## Restore file yang terhapus
Jika Anda ingin mengembalikan file sementara yang saya hapus dan file tersebut pernah di-commit ke Git, jalankan:

```cmd
cd /d D:\laragon\www\LaravelSBAdmin2
git checkout -- <path/to/file>
```

Jika file tidak pernah di-commit, maka tidak dapat direstorasi dari Git.

---

Kalau Anda mau, saya bisa:
- Menambahkan rules `.gitignore` untuk artefak sementara secara otomatis, atau
- Menghapus `.idea/` dan/atau `node_modules/` untuk membersihkan repositori dari file lokal,
- Atau mengekstrak partials (header/footer/sidebar) dari template menjadi Blade partials.

Tolong beri tahu langkah pembersihan atau fitur lanjutan mana yang ingin saya kerjakan selanjutnya.
# Laravel-SBAdmin2-Pro  
