<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class MiscellaneousController extends Controller
{
  public function countjob()
  {
    $total = Post::count();
    $informatika = Post::where('categories', '=', 'informatika')->count();
    $mesin = Post::where('categories', '=', 'mesin')->count();
    $elektro = Post::where('categories', '=', 'elektro')->count();

    return compact(
      'total',
      'informatika',
      'mesin',
      'elektro'
    );
  }

  public function tokenuser()
  {
    $user = User::find(1); // Retrieve the user you want to generate the token for
    $token = $user->npm;
    $total = Post::count();
    $data = Post::select('id', 'slug', 'title', 'companies', 'work_type', 'worksite', 'created_at')
      ->orderBy('created_at', 'DESC')
      ->get();

    return response()->json(
      $user
    );
  }

  public function topcompanies()
  {
    $json = [
      "companies" => [
        [
          "rank" => 1,
          "name" => "PT Bank Central Asia Tbk",
          "industry" => "Banking"
        ],
        [
          "rank" => 2,
          "name" => "PT Bank Rakyat Indonesia (Persero) Tbk",
          "industry" => "Banking"
        ],
        [
          "rank" => 3,
          "name" => "PT Telkom Indonesia (Persero) Tbk",
          "industry" => "Telecommunications"
        ],
        [
          "rank" => 4,
          "name" => "PT Unilever Indonesia Tbk",
          "industry" => "Consumer Goods"
        ],
        [
          "rank" => 5,
          "name" => "PT Astra International Tbk",
          "industry" => "Conglomerate"
        ],
        [
          "rank" => 6,
          "name" => "PT Bank Mandiri (Persero) Tbk",
          "industry" => "Banking"
        ],
        [
          "rank" => 7,
          "name" => "PT Bank Negara Indonesia (Persero) Tbk",
          "industry" => "Banking"
        ],
        [
          "rank" => 8,
          "name" => "PT Indofood Sukses Makmur Tbk",
          "industry" => "Food and Beverage"
        ],
        [
          "rank" => 9,
          "name" => "PT Bank CIMB Niaga Tbk",
          "industry" => "Banking"
        ],
        [
          "rank" => 10,
          "name" => "PT Bank Danamon Indonesia Tbk",
          "industry" => "Banking"
        ],
        [
          "rank" => 11,
          "name" => "PT Bank Tabungan Negara (Persero) Tbk",
          "industry" => "Banking"
        ],
        [
          "rank" => 12,
          "name" => "PT Gudang Garam Tbk",
          "industry" => "Tobacco"
        ],
        [
          "rank" => 13,
          "name" => "PT Bank Pembangunan Daerah Jawa Barat dan Banten Tbk",
          "industry" => "Banking"
        ],
        [
          "rank" => 14,
          "name" => "PT Bank Panin Tbk",
          "industry" => "Banking"
        ],
        [
          "rank" => 15,
          "name" => "PT Indofood CBP Sukses Makmur Tbk",
          "industry" => "Food and Beverage"
        ],
        [
          "rank" => 16,
          "name" => "PT XL Axiata Tbk",
          "industry" => "Telecommunications"
        ],
        [
          "rank" => 17,
          "name" => "PT Bank Mega Tbk",
          "industry" => "Banking"
        ],
        [
          "rank" => 18,
          "name" => "PT Astra Agro Lestari Tbk",
          "industry" => "Plantation"
        ],
        [
          "rank" => 19,
          "name" => "PT Indofood CBP Sukses Makmur Tbk",
          "industry" => "Food and Beverage"
        ],
        [
          "rank" => 20,
          "name" => "PT Kalbe Farma Tbk",
          "industry" => "Pharmaceutical"
        ]
      ]
    ];

    $names = array_column($json['companies'], 'name');
    $response = [
      "names" => $names
    ];

    return response()->json($response);
  }

  public function datatablesLang()
  {
    $lang = [
      "emptyTable" =>  "Tidak ada data yang tersedia pada tabel ini",
      "info" =>  "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
      "infoEmpty" =>  "Menampilkan 0 sampai 0 dari 0 entri",
      "infoFiltered" =>  "(disaring dari _MAX_ entri keseluruhan)",
      "lengthMenu" =>  "Tampilkan _MENU_ entri",
      "loadingRecords" =>  "Sedang memuat...",
      "processing" =>  "Sedang memproses...",
      "search" =>  "Cari:",
      "zeroRecords" =>  "Tidak ditemukan data yang sesuai",
      "thousands" =>  "'",
      "paginate" => [
        "first" =>  "Pertama",
        "last" =>  "Terakhir",
        "next" =>  "»",
        "previous" =>  "«"
      ],
      "aria" => [
        "sortAscending" =>  " =>  aktifkan untuk mengurutkan kolom ke atas",
        "sortDescending" =>  " =>  aktifkan untuk mengurutkan kolom menurun"
      ],
      "autoFill" => [
        "cancel" =>  "Batalkan",
        "fill" =>  "Isi semua sel dengan <i>%d</i>",
        "fillHorizontal" =>  "Isi sel secara horizontal",
        "fillVertical" =>  "Isi sel secara vertikal"
      ],
      "buttons" => [
        "collection" =>  "Kumpulan <span class='ui-button-icon-primary ui-icon ui-icon-triangle-1-s'/>",
        "colvis" =>  "Visibilitas Kolom",
        "colvisRestore" =>  "Kembalikan visibilitas",
        "copy" =>  "Salin",
        "copySuccess" => [
          "1" =>  "1 baris disalin ke papan klip",
          "_" =>  "%d baris disalin ke papan klip"
        ],
        "copyTitle" =>  "Salin ke Papan klip",
        "csv" =>  "CSV",
        "excel" =>  "Excel",
        "pageLength" => [
          "-1" =>  "Tampilkan semua baris",
          "_" =>  "Tampilkan %d baris"
        ],
        "pdf" =>  "PDF",
        "print" =>  "Cetak",
        "copyKeys" =>  "Tekan ctrl atau u2318 + C untuk menyalin tabel ke papan klip.<br /><br />Untuk membatalkan, klik pesan ini atau tekan esc."
      ],
      "searchBuilder" => [
        "add" =>  "Tambah Kondisi",
        "button" => [
          "0" =>  "Cari Builder",
          "_" =>  "Cari Builder (%d)"
        ],
        "clearAll" =>  "Bersihkan Semua",
        "condition" =>  "Kondisi",
        "data" =>  "Data",
        "deleteTitle" =>  "Hapus filter",
        "leftTitle" =>  "Ke Kiri",
        "logicAnd" =>  "Dan",
        "logicOr" =>  "Atau",
        "rightTitle" =>  "Ke Kanan",
        "title" => [
          "0" =>  "Cari Builder",
          "_" =>  "Cari Builder (%d)"
        ],
        "value" =>  "Nilai",
        "conditions" => [
          "date" => [
            "after" =>  "Setelah",
            "before" =>  "Sebelum",
            "between" =>  "Diantara",
            "empty" =>  "Kosong",
            "equals" =>  "Sama dengan",
            "not" =>  "Tidak sama",
            "notBetween" =>  "Tidak diantara",
            "notEmpty" =>  "Tidak kosong"
          ],
          "number" => [
            "between" =>  "Diantara",
            "empty" =>  "Kosong",
            "equals" =>  "Sama dengan",
            "gt" =>  "Lebih besar dari",
            "gte" =>  "Lebih besar atau sama dengan",
            "lt" =>  "Lebih kecil dari",
            "lte" =>  "Lebih kecil atau sama dengan",
            "not" =>  "Tidak sama",
            "notBetween" =>  "Tidak diantara",
            "notEmpty" =>  "Tidak kosong"
          ],
          "string" => [
            "contains" =>  "Berisi",
            "empty" =>  "Kosong",
            "endsWith" =>  "Diakhiri dengan",
            "equals" =>  "Sama Dengan",
            "not" =>  "Tidak sama",
            "notEmpty" =>  "Tidak kosong",
            "startsWith" =>  "Diawali dengan"
          ],
          "array" => [
            "equals" =>  "Sama dengan",
            "empty" =>  "Kosong",
            "contains" =>  "Berisi",
            "not" =>  "Tidak",
            "notEmpty" =>  "Tidak kosong",
            "without" =>  "Tanpa"
          ]
        ]
      ],
      "searchPanes" => [
        "clearMessage" =>  "Bersihkan Semua",
        "count" =>  "{total}",
        "countFiltered" =>  "{shown} ({total})",
        "title" =>  "Filter Aktif - %d",
        "collapse" => [
          "0" =>  "Panel Pencarian",
          "_" =>  "Panel Pencarian (%d)"
        ],
        "emptyPanes" =>  "Tidak Ada Panel Pencarian",
        "loadMessage" =>  "Memuat Panel Pencarian"
      ],
      "infoThousands" =>  ",",
      "select" => [
        "cells" => [
          "1" =>  "1 sel terpilih",
          "_" =>  "%d sel terpilih"
        ],
        "columns" => [
          "1" =>  "1 kolom terpilih",
          "_" =>  "%d kolom terpilih"
        ]
      ],
      "datetime" => [
        "previous" =>  "Sebelumnya",
        "next" =>  "Selanjutnya",
        "hours" =>  "Jam",
        "minutes" =>  "Menit",
        "seconds" =>  "Detik",
        "unknown" =>  "-",
        "amPm" =>  [
          "am",
          "pm"
        ],
        "weekdays" =>  [
          "Min",
          "Sen",
          "Sel",
          "Rab",
          "Kam",
          "Jum",
          "Sab"
        ],
        "months" =>  [
          "Januari",
          "Februari",
          "Maret",
          "April",
          "Mei",
          "Juni",
          "Juli",
          "Agustus",
          "September",
          "Oktober",
          "November",
          "Desember"
        ]
      ],
      "editor" => [
        "close" =>  "Tutup",
        "create" => [
          "button" =>  "Tambah",
          "submit" =>  "Tambah",
          "title" =>  "Tambah inputan baru"
        ],
        "remove" => [
          "button" =>  "Hapus",
          "submit" =>  "Hapus",
          "confirm" => [
            "1" =>  "Apakah Anda yakin untuk menghapus 1 baris?",
            "_" =>  "Apakah Anda yakin untuk menghapus %d baris?"
          ],
          "title" =>  "Hapus inputan"
        ],
        "multi" => [
          "title" =>  "Beberapa Nilai",
          "info" =>  "Item yang dipilih berisi nilai yang berbeda untuk input ini. Untuk mengedit dan mengatur semua item untuk input ini ke nilai yang sama, klik atau tekan di sini, jika tidak maka akan mempertahankan nilai masing-masing.",
          "restore" =>  "Batalkan Perubahan",
          "noMulti" =>  "Masukan ini dapat diubah satu per satu, tetapi bukan bagian dari grup."
        ],
        "edit" => [
          "title" =>  "Edit inputan",
          "submit" =>  "Edit",
          "button" =>  "Edit"
        ],
        "error" => [
          "system" =>  "Terjadi kesalahan pada system. (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Informasi Selebihnya</a>)."
        ]
      ],
      "stateRestore" => [
        "creationModal" => [
          "button" =>  "Buat",
          "columns" => [
            "search" =>  "Pencarian Kolom",
            "visible" =>  "Visibilitas Kolom"
          ],
          "name" =>  "Nama:",
          "order" =>  "Penyortiran",
          "paging" =>  "Penomoran",
          "scroller" =>  "Posisi Scroll",
          "search" =>  "Pencarian",
          "searchBuilder" =>  "Pembangun Pencarian",
          "select" =>  "Pemilihan",
          "title" =>  "Buat State Baru",
          "toggleLabel" =>  "Termasuk:"
        ],
        "duplicateError" =>  "State dengan nama ini sudah ada.",
        "emptyError" =>  "Nama tidak boleh kosong.",
        "emptyStates" =>  "Tidak ada state yang disimpan.",
        "removeConfirm" =>  "Apakah Anda yakin ingin menghapus %s?",
        "removeError" =>  "Gagal menghapus state.",
        "removeJoiner" =>  "dan",
        "removeSubmit" =>  "Hapus",
        "removeTitle" =>  "Hapus State",
        "renameButton" =>  "Ganti Nama",
        "renameLabel" =>  "Nama Baru untuk %s:",
        "renameTitle" =>  "Ganti Nama State"
      ]
    ];

    return response()->json($lang);
  }
}
