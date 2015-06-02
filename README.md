# SliMedoo-Framework

SliMedoo adalah lightweight PHP framework yang merupakan hybrid Slim dan Medoo. Pada routing dan request kita menggunakan Slim dan Medoo untuk koneksi dengan database. SliMedoo mengimplementasi SQLite untuk databasenya. SQLite merupakan driver database yang berbasis file. Operasi yang ada di MySql tidak jauh berbeda dengan SQLite.

## Penggunaan
Download as zip repository ini dan lakukan semua control di index.php (silahkan jika ingin diubah misal menjadi /controller/function.php, etc). Dan untuk menampilkan halaman dari view cukup mengimplementasi 2 baris:

$data = 'views/create.php'; // halaman yang ingin ditampilkan
include_once 'views/_default_template.php'; // template yang ingin digunakan

### Dokumentasi
Seluruh dokumentasi dari SliMedoo ada di official website [Slim](docs.slimframework.com) dan [Medoo](medoo.in).
