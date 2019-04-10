# gatepass-adminsystem
<pre>
4.4 Desain Database
		Dalam database yang akan menampung seluruh jenis data, maka harus ada pola struktur database yang baik agar tidak terjadi redudansi dan inkonsistensi data. Dalam Membangun Aplikasi Website secara Onlineyang akan dirancang, database dibuat dengan menggunakan aplikasi MySQL yang terdiri dari beberapa table di antaranya sebagai berikut:
Tabel  4.4.1 Tabel Petugas
Field Name	Data Type	Field Size/Format	Key
Id_petugas*	Int	10	Primary key
nama_petugas	Varchar		25	Not Null
username	Varchar		25	Not Null
password	Varchar	15	Not Null
jkln	Enum	‘Laki-Laki’,’Perempuan’	Not Null
agama	Varchar	25	Not Null
Level	Enum	‘Admin’,’Operator’	Not Null

Tabel  4.4.2 Tabel gatepass
File Name	Data Type	Field Size/Format	Key
Id_gatepass*	Int	15	Primary key
kategori_id	Int	15	Foreign Key
Tgl_expired	Date	0	Not Null
Tgl_update	Date	0	Not Null
Kendaraan_id	Int	15	Foreign Key
Lokasi_id	Int	15	Foreign Key
Petugas_id	Int	15	Foreign Key
Pemilik_id	Int	15	Foreign Key

Tabel  4.4.3 Tabel kendaraan
File Name	Data Type	Field Size/Format	Key
Id_kendaraan*	Int	15	Primary key
No_plat	Varchar	25	Not Null
Merek	int	25	Not Null
Id_jenis	int	15	Foreign Key
Id_pemilik	Int	15	Foreign Key

Tabel  4.4.4 Tabel jenis_kendaraan
File Name	Data Type	Field Size/Format	Key
Id_jenis*	Int	15	Primary key
Nama_jenis	Varchar	255	Not Null

Tabel  4.4.5 Tabel pemilik
File Name	Data Type	Field Size/Format	Key
Id_kendaraan*	Int	15	Primary key
No_plat	Varchar	25	Not Null
Merek	int	25	Not Null
Id_jenis	int	15	Foreign Key
Id_pemilik	Int	15	Foreign Key


Tabel  4.4.6 Tabel kategori
File Name	Data Type	Field Size/Format	Key
Id_kategori*	Int	15	Primary key
Nama_kategori	Varchar	255	Not Null

Tabel  4.4.7 Tabel lokasi
File Name	Data Type	Field Size/Format	Key
Id_lokasi*	Int	15	Primary key
kd_lokasi	Varchar	255	Not Null
Nama_lokasi	Varchar	255	Not Null

4.5 Implementasi
Setelah sistem mengalami proses analisa, maka proses selanjutnya adalah implementasi hasil analisa tersebut ke dalam suatu perangkat lunak yang akan dioperasikan secara langsung oleh user dalam mengurangi kelemahan sistem yang lama (manual). 

4.5.1 .Halaman Awal Gatepass Administration System
Halaman awal Gatepass Administration System adalah halaman login untuk admin ataupun operator untuk menginputkan data, sabagaimana tampilannya sebagai berikut:
a.	Halaman awal
<img src="http://smkdarullughahwalkaromah.sch.id/img/1.halaman%20login.PNG">
 
Gambar 4.1 Halaman  login gatepass administration system

4.5.2.Halaman Admin
Tugas admin adalah menginput, mengedit dan menghapus data-data seperti  Data beritaData galeri , Data informasi dan upload data.
Sebelum admin menginput data, admin harus login terlebih dahulu. Jika sukses maka admin bisa mengakses data. Berikut halaman login admin.


a.	Halaman utama administrator

<img src="http://smkdarullughahwalkaromah.sch.id/img/2.halaman%20home.PNG">

Gambar 4.2 Halaman  utama admin

Halaman  input, edit dan hapus data petugas  yang telah di inputkan  oleh admin. Petugas meliputi dua level yaitu admin dan operator. Berikut tampilah data kelas.
b.	Halaman data petugas

<img src="http://smkdarullughahwalkaromah.sch.id/img/3.halaman%20data&20petugas.PNG">

Gambar 4.3 Halaman  data petugas

c. Halaman input data petugas

<img src="http://smkdarullughahwalkaromah.sch.id/img/3.halaman%20input%20data&20petugas.PNG">

Gambar 4.4 Halaman  input data petugas
		Fungsi dari input data petugas adalah menambahkan data petugas 	untuk diinput kan.


d. Halaman edit data petugas

<img src="http://smkdarullughahwalkaromah.sch.id/img/4.halaman%20edit%20data&20petugas.PNG">

Gambar 4.5 Halaman  edit data petugas

		Fungsi dari edit data petugas adalah mengubah data petugas 	yang telah diinputkan karena kemungkinan memiliki kesalahan saat input.


e.	Halaman data kendaraan

<img src="http://smkdarullughahwalkaromah.sch.id/img/5.halaman%20data%20kendaraan.PNG">

Gambar 4.6 Halaman data kendaraan

Fungsi dari Halaman Data kendaraan menginputkan, mengedit dan menghapus data kendaraan yang ada pada aplikasi. Perbedaannya dari Data Petugas adalah Data Kendaraan memiliki beberapa foreign key yang berasal dari data tetap atau tidak bisa diubah. Yaitu tabel jenis_kendaraan dan pemilik karena jenis kendaraan adalah menentukan jenis kendaraan apakah kendaraan tersebut agar lebih mudah kita mencacahnya. Dan juga tabel pemilik menentukan dimiliki oleh PT/ perusahaan manakah kendaraan tersebut, jadi kita membedakan beberapa data agar lebih mudah untuk dimanupalasi.

f.	Halaman Data Lokasi

<img src="http://smkdarullughahwalkaromah.sch.id/img/6.halaman%20data%20lokasi.PNG">

Gambar 4.7 Halaman  data kategori
Fungsi dari Halaman Data Lokasi menginputkan, mengedit dan menghapus data kendaraan yang ada pada aplikasi.
g.	Halaman Data Lokasi
	
<img src="http://smkdarullughahwalkaromah.sch.id/img/7.halaman%20data%20kategori.PNG">

Gambar 4.8 Halaman  data kategori
Fungsi dari Halaman Data Kategori menginputkan, mengedit dan menghapus data kendaraan yang ada pada aplikasi.
h.	Halaman Data Gatepass
	
<img src="http://smkdarullughahwalkaromah.sch.id/img/8.halaman%20data%20gatepass.PNG">

Gambar 4.9 Halaman data gatepass
Fungsi dari Halaman Data Gatepass menginputkan, mengedit dan menghapus data kendaraan yang ada pada aplikasi. Ini adalah tabel utama pada aplikasi ini, karena semua data yang dari awal kita implementasikan akan berbuhungan ke tabel ini. Pertama dari Tabel Petugas, apa fungsinya? Fungsinya adalah mengetahui bahwa ID petugas sekian telah menginputkan data gatepass pada tanggal sekian, dan tanggal updatenya pada tanggal sekian. Kedua tabel Kategori, untuk mengetahui apakah data gatepass ini milik PT.POMI atau PT/perusahaan lainnya atau disebut dengan Kontraktor. Ketiga adalah tabel lokasi, untuk mengetahui lokasi yang akan dikunjungi pengguna gatepass maka dibutuhkan tabel lokasi, agar admin ataupun operator dapat menentukan lokasi yang telah direquest oleh orang perusahaan untuk mengunjungi lokasi tersebut. Keempat adalah kendaraan, untuk mengetahui detail kendaraan yang memiliki data gatepass dengan ID tersebut agar mempermudahnya kita bisa mengisi data tersebut di bagia DATA KENDARAAN, dan disini lah akan tercipta data gatepass secara detailnya memiliki beberapa foreign key agar mempermudah untuk detail data yang kita inputkan untuk aplikasi ini.

g.	Fungsi print Statistik Gatepass

<img src="http://smkdarullughahwalkaromah.sch.id/img/9.Statistik.PNG">

Gambar 4.10 Fungsi Print Statistik
Kami menambahkan fungsi tambahan untuk program ini, yaitu Print Statistik Gatepass. Untuk statistic kami menggunakan ChartJS agar mempermudah melihat statistic gatepass yang ada pada database setiap bulannya.

</pre
