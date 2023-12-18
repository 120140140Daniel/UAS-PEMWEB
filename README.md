Kelas DataHandler
Kelas DataHandler adalah sebuah kelas dalam PHP yang dirancang untuk mengelola operasi dasar CRUD (Create, Read, Update, Delete) pada database mahasiswa secara hipotetis. Kelas ini membentuk koneksi database MySQL saat diinisialisasi dan menyediakan metode untuk menambah, mengambil, dan memperbarui data mahasiswa.

Penggunaan
Inisialisasi
//Membuat instans kelas DataHandler
$dataHandler = new DataHandler($host, $username, $password, $database);

Menambah Data
//Menambahkan mahasiswa baru ke database
$dataHandler->tambahData($nama, $usia, $jenisKelamin, $hobi);

Mengambil Data
//Mengambil semua data mahasiswa dari database
$data = $dataHandler->getData();

Memperbarui Data
//Memperbarui data mahasiswa yang sudah ada di database
$dataHandler->updateData($id, $nama, $usia, $jenisKelamin, $hobi);

Menutup Koneksi
//Menutup koneksi database setelah selesai
$dataHandler->closeConnection();

Parameter Konstruktor
$host: Nama host dari server MySQL.
$username: Nama pengguna database MySQL.
$password: Kata sandi database MySQL.
$database: Nama database MySQL.

Metode
'tambahData($nama, $usia, $jenisKelamin, $hobi)'
Menambahkan mahasiswa baru ke dalam database.

'getData()'
Mengambil semua data mahasiswa dari database.

'updateData($id, $nama, $usia, $jenisKelamin, $hobi)'
Memperbarui data mahasiswa yang sudah ada di database berdasarkan ID yang diberikan.

'closeConnection()'
Menutup koneksi database MySQL.
