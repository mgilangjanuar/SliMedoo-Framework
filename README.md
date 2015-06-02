# SliMedoo-Framework

SliMedoo adalah lightweight PHP framework yang merupakan hybrid Slim dan Medoo. Pada routing dan request kita menggunakan Slim dan Medoo untuk koneksi dengan database. SliMedoo mengimplementasi SQLite untuk databasenya. SQLite merupakan driver database yang berbasis file. Operasi yang ada di MySql tidak jauh berbeda dengan SQLite.


## Penggunaan
Download as zip repository ini dan lakukan semua control di index.php (silahkan jika ingin diubah misal menjadi /controller/function.php, etc). Dan untuk menampilkan halaman dari view cukup mengimplementasi 2 baris:

  $data = 'views/create.php';                   // halaman yang ingin ditampilkan
  
  include_once 'views/_default_template.php';   // template yang ingin digunakan


## Konfigurasi Database
Pada 'db/data.sqlite' sudah ada table book dengan id, dan title sebagai columnnya. Bila ingin membuat database sendiri cukup install SQLite dengan [tutorial ini](http://www.tutorialspoint.com/sqlite/sqlite_installation.htm). Kemudian untuk membuat file baru:

1. Arahkan terminal ke folder 'slimedoo/db'
2. Ketik 'sqlite3 database-baru.sqlite'
3. Buat table misalnya 'CREATE TABLE book(id INT PRIMARY KEY AUTOINCREMENT, title TEXT NOT NULL)'
4. Atur kembali file 'config/config.php'
5. Dan mulai tahap pengembangan dengan mengimplementasi file 'index.php' dan file-file yang ada di folder 'views'


## Dokumentasi
Seluruh dokumentasi dari SliMedoo ada di official website [Slim](docs.slimframework.com) dan [Medoo](medoo.in).
