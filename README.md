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

Sekilas Screenshots daripada Gatepass Administration System

<img src="http://smkdarullughahwalkaromah.sch.id/img/1.halaman%20login.PNG">

<img src="http://smkdarullughahwalkaromah.sch.id/img/2.halaman%20home.PNG">

