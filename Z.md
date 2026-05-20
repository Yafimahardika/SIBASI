# Jangan Lupa Hapus Komen Saat Seeding Database Baru!

# Tambahkan source seeders lain pada line 26 DatabaseSeeder!

# Kurang Tabel Setoran dan Penarikan

# Relation pada model jenis sampah, setoran, dan, nasabah belum ditambahkan

# Jangan lupa buat SRS kalo ada waktu

# Seeder setoran belum dibuat

# Ketika pull project dari github, jangan lupa:
1. composer install
2. cp .env.example .env (Sesuaikan konfigurasinya dulu.)
3. php artisan key:generate

1. php artisan migrate
2. php artisan db:seed

1. npm install
2. npm run dev


=============================================================================
Yafi, 16/05/26
-Menambahkan laravel breeze untuk menampilkan UI login
-Breeze stack blade with alphine
-Test framework pest(original)

Tentang migrasi:
Migrasi akan lebih baik jika tidak dilakukan secara bersama-sama (batch)
Migrasi satu persatu lebih baik, dan terkoordinir secara urutan sehingga memudahkan untuk rollback

Tentang seeder:
Database seeder tidak langsung menyambung atau mengerti arah seedernya mau di bawa ke tabel apa, 
maka dari itu kamu perlu menambahkan model yang terkait dengan tabel yang kamu ingin isi, misalnya:
`use App/Models/Produk;`

`bcrypt`
Adalah semacam mekanisme hashing untuk menghindari bruteforce, lebih tepatnya algorimta yang berjalan
searah, artinya karakter yang sudah di konversi ke
hash tidak bisa dikembalikan ke bentuk karakter aslinya

_Setup auth sederhana berhasil dibuat, 16:00_
=============================================================================
Yafi, 16/05/2026
-Menambahkan controller untuk CRUD nasabah
**Eloquent** => Adalah Object Relational Mapping (ORM) yang merepresentasikan:
# Tabel sebagai model
# Baris data sebagai objek
Apa maksudnya? Aku ngga tau.

-file .blade.php harus dibuat manual ya! (kecuali login xixixi)

Daftar nasabah sudah bisa dilihat di /nasabah, btw pake Eloquent bukan Query Builder
menyesuiakan materi pak miftah.

Ada paket bootstrap yang di install tapi belum di setting config import, npm run dev (compile dengan vite)
Pada ui blade dipakaikan bootstrap untuk styling yang di panggil lewat CDN

Let's call it a day! _17/05/26, 00:45_

Class penarikan masih jadi kosong lagi tuh!
=============================================================================
Yafi, 17/05/2026
-Melanjutkkan menambahkan controller untuk CRUD nasabah
-Fokus pada bagian create/input

Kemarin lupa mencatatat, sudah ada dua data dummy yang bisa untuk demo
Bingung di bagian `Nasabah::create`, salahnya ditulis `created`
Sekarang, fungsi _Create_ sudah bisa di pakai.
Selanjutnya untuk membuat nomor rekening di variabel no_rekening yang sekarang, sementara di setel **NULL**

Blade templating enggine, templating enggine bawaan laravel yang bertugas memisahkan logika backend dengan tampilan HTML. Contohny sintaks `{{ $var }}`

Let's call it a day! _17/05/2026 , 23:35_

=============================================================================
Letak repo projek SIBASI dari akun github tiana di pindah ke akun github yafi.

_19/05/2026, 20:55_
=============================================================================
Jangan lupa untuk membuat kunci aplikasi dengan `php artisan key:generate`
Jangan lupa juga mengganti jenis database ke db *mysql*

*Error* Saat buat migration, karena ada foreign key yang belum dibuat, ya error

Ada fungsi dari php yang ngga kumengerti jadi harus belajar mundur
`subtr()` dan `str_pad()`, meski begitu, tetap ada progres: nomor rekening sudah bisa digenerate otomatis dengan format prefix dan nomor

Juga ada alert yang akan merespon error lewat session, makasih co-pilot

Let's call it a day! _21/05/2026, 00:10_ commited by *Yafi*

