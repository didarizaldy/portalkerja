<p align="center"><img src="/doc/logo-duta-bangsa.png"></p>

## Abstrak

Penelitian yang dilakukan oleh penulis bertujuan untuk dapat membangun sebuah informasi mengenai portal kerja agar informasi mengenai pekerjaan dapat diakses secara umum khususnya untuk masyarakat dan juga para alumni dari Sekolah Tinggi Teknologi Duta Bangsa dalam memperoleh informasi lowongan pekerjaan yang efektif dan juga efisien.
Dalam pengembangan sistem informasi portal kerja yang dilakukan oleh penulis menggunakan metode pengembangan use case diagram. Dibantu dengan hardware yaitu processor intel core i7, RAM 8 GB, penyimpanan SSD 500 GB. Adapun dibantu dengan software yaitu xampp, Database Management System (DBMS) MySQL, Visual Studio Code (VSCode) sebagai code editor untuk menulis program, serta menggunakan framework Laravel.
Pengumpulan data yang digunakan oleh penulis dalam memperoleh informasi terkait terdiri dari observasi, wawancara, dan studi pustaka. Dalam penelitian yang dilakukan oleh penulis menghasilkan output informasi mengenai lowongan pekerjaan dan informasi pelamar yang terdaftar.

Kata Kunci

```bash
  - Informasi Portal Kerja, 
  - Use Case Diagram, 
  - MySQL, 
  - Visual Studio Code, 
  - Laravel
```

## Speksifikasi Sistem

Untuk dapat menggunakan aplikasi ini diharapkan user memastikan hal berikut sudah sesuai, diantara adalah :

- Php Versi 7.0.xx
- Laravel 5.5.xx
- Composer 2.0.xx

## Package Laravel

Adapun saya menggunakan beberapa package sebagai penunjang kebutuhan, diharapkan dengan menggunakan package ini mampu mempersingkat waktu develop dan sistem yang dibangun dapat lebih bisa dimaintenance kedepannya. Package tersebut diantaraya :

- UUID By Ramsey
- Spatie Role Permission
- Yajra Datatable V. 8.13

## Tata Cara Penggunaan

Apabila semua package dan spesifikasi standar sudah sesuai program dapat dijalankan dengan tata cara sebagai berikut :

- Pertama clone repository ini dengan cara :

```bash
  gh repo clone didarizaldy/portalkerja
```

- Kedua lakukan instalasi package terdaftar dengan cara :

```bash
composer install
```

- Ketiga lakukan database migration dan seed (Opsional apabila diperlukan bisa menggunkaan faker untuk data testing, hal ini tidak dianjurkan hanya langkah opsional)

**Pastikan menggunakan salah satu, jangan keduanya !!**

```bash
php artisan migrate:refresh
```

atau jika ingin melakukan seeding databse bisa dengan cara sebagai berikut :

```bash
php artisan migrate:refresh --seed
```

## Screenshot Sistem 
Berikut screenshot sistem.

- Login Form
User dapat melakukan akses masuk ke dalam sistem dengan menggunakan NPM beserta password yang sesuai
<img src="/doc/1 - Login Form.png">

- Dashboard Awal
Dashboard awal merupakan home page, halaman ini dapat diakses dengan atau tanpa login terlebih dahulu yang mana beriisikan mengenai informasi portal kerja
<img src="/doc/2 - Dashboard Awal.png">

- Dashboard Lanjutan
Berikut merupakan lanjutan dari home yaitu pada bagian tengah halaman tersebut.
<img src="/doc/3 - Dashboard Tengah.png">

- Profile STTDB
Halaman berikut berisikan informasi mengenai Sekolah Tinggi Teknologi Duta Bangsa
<img src="/doc/4 - Profile STTDB.png">

- Lokasi Kampus STTDB
Halaman berikut berisikan informasi mengenai lokasi dari kampus Sekolah Tinggi Duta Bangsa
<img src="/doc/5 - Lokasi Kampus STTDB.png">

- Menu Utama
Halaman berikut merupakan menu utama yang berisikan informasi mengenai lowongan kerja, terlampir juga beberapa rincian informasi terkait dari informasi kerja yang ditampilkan
<img src="/doc/6 - Menu Utama.png">

- Menu Sidebar
Sidebar menu berbeda-beda sesuai dengan akses, role, dan user
<img src="/doc/7 - File Menu.png">

- Halaman Kategori
Halaman kategori sama seperti halaman utama tetapi memiliki informasi yang ditampilkan terperinci berdasarkan kategori
<img src="/doc/8 - Halaman Kategori.png">

- Detail Lowongan Pekerjaan
Berisikan informasi detail mengenai pekerjaan terlampir secara terperinci
<img src="/doc/9 - Detail Lowongan Pekerjaan.png">

- Fitur Untuk Daftar Pekerjaan
User dapat submit apabila telah login dengan menggunakan akun terdaftar
<img src="/doc/10 - Mendaftar Lowongan Pekerjaan.png">

- Fitur Untuk Membatalkan Submit Pekerjaan
User dapat membatalkan submit pekerjaan apabila telah terdaftar dengan menggunakan akun terdaftar
<img src="/doc/11 - Membatalkan Pendaftaran.png">

- Laporan Pelamar Kerja
Admin web dapat melihat laporan daftar para pelamar kerja
<img src="/doc/12 - Laporan Pelamar Kerja.png">

- Laporan Mengelola Daftar Perusahaan
Admin web dapat mengelola daftar perusahaan penyedia
<img src="/doc/13 - Laporan Daftar Perusahaan.png">

- Laporan Mengelola Daftar
Admin web dapat mengelola daftar lowongan pekerjaan
<img src="/doc/14 - Laporan Mengelola Daftar Lowongan Kerja.png">

- Pengelolaan Postingan Lowongan Kerja
Admin web mengelola postingan mengenai lowongan kerja pada halaman berikut
<img src="/doc/15 - Postingan Lowongan Pekerjaan.png">

- Laporan Daftar Pengelolaan Lowongan Kerja
Admin web dapat melihat daftar pengelolaan mengenai lowongan kerja yang sudah terdaftar untuk diposting
<img src="/doc/16 - Laporan Daftar Pengelola Perusahaan.png">

- Input Data Perusahaan
Admin web dapat menambahkan data perusahaan terdaftar yang akan membuat lowongan kerja pada website ini
<img src="/doc/17 - Tambah Data Perusahaan.png">

- Pengelolaan User Akses
Admin web mengelola user akses pada halaman berikut
<img src="/doc/18 - Mengelola User Akses Sistem.png">

- Daftar User Akses
Halaman yang melampirkan daftar uses akses yang terdaftar pada website
<img src="/doc/19 - Daftar User Akses Sistem.png">

- Fitur Export Data Pelamar Kerja
Admin website dapat export daftar para pelamar kerja dengan menekan tombol download
<img src="/doc/20 - Export Data Pelamar Kerja.png">

- Fitur Export Data Perusahaan
Admin website dapat export daftar perusahaan terdaftar pada sistem
<img src="/doc/21 - Export Data Perusahaan.png">

## License
Seluruh lisensi ini bersifat open source yang mana dapat digunakan kembali tanpa harus izin melalui saya selaku pembuat sistem.
Silakan dikembangkan.
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
