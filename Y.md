Misalnya ada sintak:
`$table->decimal('jumlah', 15, 2);`
yang 15 adalah jumlah digit nomor yang bisa diinputkan
yang 2 adalah scale atau jumlah digit dibelakang koma, dalam kasus ini nol dibelakang koma

Misalnya ada sintak:
`Penarikan::truncate();`
Maksdunya penarikan (tidak pakai $) merujuk pada model,
Maksudnya truncate adalah memnghapus data lama agar tidak terjadi duplikasi

Jika ada: 
`$nasabahs`
ada ($) maka itu merujuk pada variabel

Jika ingin migrasi tabel dengan path spesifik maka:
`php artisan migrate --path=\database\migrations\YY_MM_DD_create_nama_migrate_table.php`

Jika ingin data dalam tabel migrasi direset/dihapus maka menggunakan:
`php artisan migrate:fresh`
hanya data dalam tabel yang dihapus, itupun bisa diisi lagi dengan seeder

Jika ingin memnbuat controller maka:
`php artisan make:controller NamaController`
Tambahkan `--response` maka akan mengenerate 7 method secara otomatis
1. Index, Maksudnya READ, untuk menampilkan semua data, contoh `Produk::all()` atau `paginate()`
2. Create
3. Store
4. Show
5. Edit
6. Update
7. Destroy

Jika ingin membuat **Route** untuk controller, maka:
`Route::get('/nama_link', [NamaController::class, 'method']);`
Misal controller untuk nasabah:
`Route::get('nasabah', [NasabahController::class, 'index']);`
Maksudnya method dibelakang itu manggil function yang di dibuat di controller, misal index, store
atau bahkan kustom, kayak tambah, dll.

**Mass Assigmnet**, sebuah filter yang bertujuan untuk membedakan kolom mana yang boleh di isi dan tidak.
Misal: `protected $table = 'nasabah'` dan `protected $fillable = ['nama', 'alamat']`.
Di laravel terbaru (8x), bisa tampa menyebut table dulu

Sebuah method dalam kontroler bisa diakses dengan path, misalnya `/nasabah/tambah`

Dua cara penulisan CSRF
1. Gaya lama: {{ csrf_field() }}, token
2. gaya baru: @csrf, directive

# Perhatikan penulisan router biasa dengan uri atau yang named route

Jangan lupa untuk membuat kunci aplikasi dengan `php artisan key:generate`
Jangan lupa juga mengganti jenis database ke db *mysql*

Jika ingin menghapus suatu tabel migrations, maka kamu bisa
1. Menghapus file tabel migrasi
2. Jalankan: `php artisan migrate:fresh`, perintah ini akan menghapus (drop) dan menjalankan ulang migrasi tampa tabel yang dihapus.

Cara quick open file di vscode:
1. Ctrl + P
2. Ketik nama file, enter

Tentang `truncate()`, fungsinya menghapus data dalam suatu tabel yang aka1n digantikan
dengan data baru, yang dalam hal ini berarti mereset auto increament ke 0/1