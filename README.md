//file DataHandler.php//
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

//file getData.php//
//Mengimpor kelas DataHandler
include "DataHandler.php";

//Membuat instans kelas DataHandler dengan kredensial database
$dataHandler = new DataHandler("localhost", "root", "", "webdata");

//Mengambil data mahasiswa dari database
$data = $dataHandler->getData();

//Menutup koneksi database setelah pengambilan data selesai
$dataHandler->closeConnection();

//Mengonversi data menjadi format JSON dan mencetaknya
echo json_encode($data);

//file html//
Penggunaan
Form Tambah Data:
Isi formulir dengan informasi mahasiswa yang ingin ditambahkan.
Nama (text), Usia (number), Jenis Kelamin (radio button), dan Hobi (checkbox).

Tambah Data:
Tekan tombol "Tambah Data" untuk memasukkan informasi mahasiswa ke dalam sistem.

Daftar Mahasiswa:
Tabel akan menampilkan daftar mahasiswa beserta informasinya.
Nama, Usia, Jenis Kelamin, dan Hobi ditampilkan dalam kolom-kolom tabel.

//file process.php//
Penggunaan
Pengiriman Data Melalui Formulir:
Pastikan formulir pada index.html diisi dengan informasi mahasiswa yang ingin ditambahkan.
Data akan dikirimkan ke process.php melalui metode POST.

Proses Penambahan Data:
Data mahasiswa akan diambil dari variabel POST pada process.php.
Objek DataHandler akan dibuat dan digunakan untuk menambahkan data ke dalam database.

Penutup Koneksi Database:
Setelah penambahan data selesai, koneksi database akan ditutup untuk efisiensi.

//file script.js//
Penggunaan
Pemanggilan Fungsi loadData:
Fungsi loadData dipanggil saat DOM telah sepenuhnya dimuat menggunakan event DOMContentLoaded.

Pengambilan Data dari Server:
Fungsi loadData menggunakan AJAX untuk mengambil data dari server melalui permintaan GET ke berkas getData.php.

Tampilan Data di Halaman HTML:
Setelah data diterima, fungsi displayData dipanggil untuk memasukkan data ke dalam tabel HTML dengan ID dataBody.

//file webdata.sql//
Penggunaan
Import ke Database:
Gunakan perintah SQL untuk mengimpor dump ini ke dalam server database MySQL atau MariaDB:
mysql -u username -p webdata < database_dump.sql
Gantilah username dengan nama pengguna database Anda.

Konfigurasi Aplikasi:
Pastikan aplikasi Anda menggunakan kredensial yang sesuai dengan yang terdapat dalam dump SQL ini (host: 127.0.0.1, nama database: webdata, dll.).

Referensi Tabel:
Tabel utama adalah mahasiswa dengan kolom-kolom sesuai kebutuhan aplikasi.
