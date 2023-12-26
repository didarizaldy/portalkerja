<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'    => 'Dida Rizaldy',
                'npm'    => '19972010',
                'faculty'    => 'informatika',
                'roles'    => 'admin',
                'api_token'  => str_random(32),
                'password'    => bcrypt('loginaja'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Admin Duta Bangsa',
                'npm'    => '20230001',
                'faculty'    => 'informatika',
                'roles'    => 'admin',
                'api_token'  => str_random(32),
                'password'    => bcrypt('loginadmin'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Pevita Pearce',
                'npm'    => '20230002',
                'faculty'    => 'informatika',
                'roles'    => 'editor',
                'api_token'  => str_random(32),
                'password'    => bcrypt('loginedit'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Adibah Humairah',
                'npm'    => '20230003',
                'faculty'    => 'informatika',
                'roles'    => 'admin',
                'api_token'  => str_random(32),
                'password'    => bcrypt('loginuser'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Irfan Oktavianto',
                'npm'    => '19158557',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Hendra Agunawan',
                'npm'    => '191571078',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Agrian Rahmat Ayubi',
                'npm'    => '191571093',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Sanendra',
                'npm'    => '191571082',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Abdul Kodir',
                'npm'    => '18158547',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Wahyudi',
                'npm'    => '17157841',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Hasbi',
                'npm'    => '191571092',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'M.Maulana',
                'npm'    => '191571128',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Tri Guntoro',
                'npm'    => '191571085',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Zul Fahmi',
                'npm'    => '191571074',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Sutomo',
                'npm'    => '191571080',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Rizal Zaelani',
                'npm'    => '191571123',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Debby Octora Mantik',
                'npm'    => '20158647',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Chise Midiantyka',
                'npm'    => '19158583',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Ahmad Surahman',
                'npm'    => '18158525',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Rio Veranda',
                'npm'    => '19158577',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Uci Sanusi',
                'npm'    => '191571135',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Sholeh',
                'npm'    => '18158514',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'M. Firhansah',
                'npm'    => '191571133',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Pujiantor',
                'npm'    => '191571095',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Hana Retno Cahyani',
                'npm'    => '19158564',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Abdullah',
                'npm'    => '191571122',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Sunyono Aji',
                'npm'    => '201571114',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Darmawan Sudibyo',
                'npm'    => '191571094',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Agung Jaya',
                'npm'    => '191571127',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Alfian Setiawan',
                'npm'    => '19158558',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Neng Dewi Sindhi',
                'npm'    => '20158643',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Hartono',
                'npm'    => '191571075',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Ilham Juniar Setiawan',
                'npm'    => '191571086',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'M.Vernanda',
                'npm'    => '20158649.',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Rica Resty Faozy',
                'npm'    => '20158640',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Sarifuddin Tampubolo',
                'npm'    => '191571079',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Fathurro',
                'npm'    => '18158527',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Rosita',
                'npm'    => '18158513',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Dewi Sartika',
                'npm'    => '20158587',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Yogi Kurniawan',
                'npm'    => '191561096',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Ferdiansyah Ant',
                'npm'    => '18158544',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Abdul Manaf',
                'npm'    => '191571125',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Sulistia Ningrum',
                'npm'    => '19158561',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Shofyan Hadi Barta',
                'npm'    => '18158528',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Dede Hidayat',
                'npm'    => '191571097',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Ari Cahyo',
                'npm'    => '191571098',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Priyo Sembodo',
                'npm'    => '191571081',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Hofni Ismau',
                'npm'    => '18158529',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Fajar Eko Priyadi',
                'npm'    => '191571130',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Ahmad Surya Budiman',
                'npm'    => '19158565',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Abdul Azis',
                'npm'    => '191571091',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Indri Suhartiningsih',
                'npm'    => '18158520',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Dida Rizaldy',
                'npm'    => '19158578',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('loginaja'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Spanduk Trilega Nadeak',
                'npm'    => '19158597',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Muhammad Edi Miranto',
                'npm'    => '19158566',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Zidan Maulana',
                'npm'    => '191561145',
                'faculty'    => 'mesin',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Nursalam Baharudin M',
                'npm'    => '191561163',
                'faculty'    => 'mesin',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Handri Setiawan',
                'npm'    => '181571011',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Purwono',
                'npm'    => '191561137',
                'faculty'    => 'mesin',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Ahmad Vikriah Hadi Kurnia',
                'npm'    => '191561200',
                'faculty'    => 'mesin',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Enggi Wiandika',
                'npm'    => '18157976',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Teguh Pujiyono',
                'npm'    => '181571019',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Ramadani Trisandi',
                'npm'    => '191561136',
                'faculty'    => 'mesin',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Rizal Noviansyah',
                'npm'    => '191561142',
                'faculty'    => 'mesin',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Sahrul Akhyar',
                'npm'    => '191571129',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Ahmad Syathir Munawar',
                'npm'    => '191561193',
                'faculty'    => 'mesin',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Devi Intan Permatasari',
                'npm'    => '19158556',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Isti Andriyani',
                'npm'    => '19158560',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Wahyono',
                'npm'    => '191561156',
                'faculty'    => 'mesin',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Dian Purnama Sari',
                'npm'    => '18157968',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Musriyono',
                'npm'    => '181561053',
                'faculty'    => 'mesin',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Suharta Wijaya',
                'npm'    => '191561139',
                'faculty'    => 'mesin',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Taufiq Rus Tadi',
                'npm'    => '18157970',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Wihan Ramadhan',
                'npm'    => '18157971',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Iskandar Wijaya',
                'npm'    => '191561195',
                'faculty'    => 'mesin',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Wahyu Purnomo Sejati',
                'npm'    => '18157979',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Rifki Fauzi',
                'npm'    => '191561135',
                'faculty'    => 'mesin',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'R.Fitris Yuda Bagja',
                'npm'    => '18157978',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Syifa Aprillia',
                'npm'    => '18157972',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Lukman Hakim',
                'npm'    => '18157973',
                'faculty'    => 'elektro',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Dea Savitri',
                'npm'    => '18158521',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Gina Hakiki',
                'npm'    => '19158580',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Asep Ridwan',
                'npm'    => '17158487',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Spanduk Trilega Nadeak',
                'npm'    => '19158579',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Anshori',
                'npm'    => '17158486',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Nanda Nurwanda',
                'npm'    => '18158522',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Ahmad Azis',
                'npm'    => '18158536',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Muhidin Arif',
                'npm'    => '17158474',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Gina Hakiki',
                'npm'    => '1915850',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Agis R Herdiana',
                'npm'    => '17158472',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Okky Octaviana',
                'npm'    => '17158475',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'Ferdiansyah Anto',
                'npm'    => '181585160',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        User::create(
            [
                'name'    => 'M. Mahdi Perdana',
                'npm'    => '17158489',
                'faculty'    => 'informatika',
                'roles'    => 'user',
                'api_token'  => str_random(32),
                'password'    => bcrypt('dutabangsa2023'),
                'remember_token' => str_random(32),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );


        factory(User::class, 10)->create();
        // User::factory(10)->create();
    }
}
