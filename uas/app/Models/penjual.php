<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\UserDetail;
use App\Models\Produk;
use App\models\Traits\Attributes\UserAttributes;

class Penjual extends Authenticatable
{
    use UserAttributes;

    protected $table = 'pembeli';
    use HasApiTokens, HasFactory, Notifiable;

    function detail(){
        return $this->hasOne(UserDetail::class, 'id_user');
    }

    function produk(){
        return $this->hasMany(Produk::class, 'id_user');
    }

    function getJenisKelaminStringAttribute(){
        return($this->jenis_kelamin == 1) ? "Laki-laki" : "Perempuan";
    }

    function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    function setUsernameAttribute($value){
        $this->attributes['username'] = strtolower($value);
    }

}
