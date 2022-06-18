<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';

    public function kab()
    {
        return $this->belongsTo(Kabupaten::class, 'id_kabupaten', 'id');
    }
    public function des()
    {
        return $this->hasMany(Kelurahan::class, 'id_kecamatan', 'id');
    }
}
