<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JadwalImunisasi extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'jadwal_imunisasi';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function jenis()
    {
        return $this->belongsTo(JenisImunisasi::class, 'id_jenis', 'id');
    }


    public function tanggal()
    {
        return Carbon::parse($this->attributes['tanggal'])->isoFormat('dddd / D MMM YYYY');
    }
}
