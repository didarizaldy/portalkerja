<?php

use Illuminate\Database\Seeder;

class ApplicantCompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            [
                "name" => "PT Astra International Tbk",
                "address" => "Jl. Gaya Motor Raya No. 8, Sunter II",
                "worksite" => 3171
            ],
            [
                "name" => "PT Telkom Indonesia Tbk",
                "address" => "Jl. Japati No. 1, Bandung",
                "worksite" => 3273
            ],
            [
                "name" => "PT Unilever Indonesia Tbk",
                "address" => "Jl. Raya Cikarang - Bekasi km. 25",
                "worksite" => 3171
            ],
            [
                "name" => "PT Bank Central Asia Tbk",
                "address" => "Gedung Menara BCA, Jl. MH Thamrin No. 1",
                "worksite" => 3171
            ],
            [
                "name" => "PT Bank Rakyat Indonesia Tbk",
                "address" => "Jl. Jenderal Sudirman Kav. 44-46",
                "worksite" => 3171
            ],
            [
                "name" => "PT Bank Mandiri (Persero) Tbk",
                "address" => "Plaza Mandiri, Jl. Jenderal Gatot Subroto Kav. 36-38",
                "worksite" => 3171
            ],
            [
                "name" => "PT Bank Negara Indonesia (Persero) Tbk",
                "address" => "Jl. Jenderal Sudirman Kav. 1",
                "worksite" => 3171
            ],
            [
                "name" => "PT Indofood Sukses Makmur Tbk",
                "address" => "Sudirman Plaza Indofood Tower, Jl. Jend. Sudirman Kav. 76-78",
                "worksite" => 3171
            ],
            [
                "name" => "PT Astra Honda Motor",
                "address" => "Jl. Laksda Yos Sudarso, Sunter",
                "worksite" => 3171
            ],
            [
                "name" => "PT Gudang Garam Tbk",
                "address" => "Jl. Kedungdoro No. 38",
                "worksite" => 3578
            ]
        ];

        foreach ($companies as $company) {
            DB::table('companies')->insert($company);
        }
    }
}
