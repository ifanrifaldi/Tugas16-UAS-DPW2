<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Desa;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Produk;
use Illuminate\Http\Request;

class AlamatResource extends Controller
{
    public function getKabupaten($id_provinsi)
    {
      return Kabupaten::where("id_provinsi", $id_provinsi)->get()->toJson();
    }

    public function getKecamatan($id_kabupaten)
    {
      return Kecamatan::where("id_kabupaten", $id_kabupaten)->get()->toJson();
    }

    public function getDesa($id_kecamatan)
    {
      return Desa::where("id_kecamatan", $id_kecamatan)->get()->toJson();
    }
}