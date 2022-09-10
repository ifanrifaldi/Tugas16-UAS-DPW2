<?php

namespace App\Models;
use app\Models\Kabupaten;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $table = "provinsi";

    public function kabupaten()
    {
        return $this->hasMany(Kabupaten::class, 'id_kabupaten');
    }
}