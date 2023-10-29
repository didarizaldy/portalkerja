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

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
