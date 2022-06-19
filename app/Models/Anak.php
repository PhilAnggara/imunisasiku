<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anak extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'anak';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function ibu()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function tempatLahir()
    {
        return $this->belongsTo(Kabupaten::class, 'id_kabupaten', 'id');
    }

    public function pertumbuhan()
    {
        return $this->hasMany(RiwayatPertumbuhan::class, 'id_anak', 'id');
    }
    public function rekamMedis()
    {
        return $this->hasMany(RekamMedis::class, 'id_anak', 'id');
    }
    public function imunisasi()
    {
        return $this->hasMany(Imunisasi::class, 'id_anak', 'id');
    }


    public function tanggalLahir()
    {
        return Carbon::parse($this->tgl_lahir)->isoFormat('D MMMM YYYY');
    }
    public function umur()
    {
        $tahun = Carbon::parse($this->tgl_lahir)->age;
        $bulan = Carbon::parse($this->tgl_lahir)->diffInMonths(Carbon::now());
        
        if ($bulan < 12) {
            return $bulan.' bulan';
        } elseif ($bulan % 12 == 0) {
            return $tahun.' tahun';
        } else {
            return $tahun.' tahun '.$bulan.' bulan';
        }
    }
}
