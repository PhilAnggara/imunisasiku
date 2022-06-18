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

    public function wali()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function imunisasi()
    {
        return $this->hasMany(Imunisasi::class, 'id_anak', 'id');
    }

    public function rekamMedis()
    {
        return $this->hasMany(RekamMedis::class, 'id_anak', 'id');
    }

    public function tempatLahir()
    {
        return $this->belongsTo(Kabupaten::class, 'id_kabupaten', 'id');
    }

    public function alamat()
    {
        return $this->belongsTo(Desa::class, 'id_kelurahan', 'id');
    }


    public function umur()
    {
        $tahun = Carbon::parse($this->tanggal_lahir)->age;
        $bulan = Carbon::parse($this->tanggal_lahir)->diffInMonths(Carbon::now()) % 12;
        
        if ($bulan == 0) {
            return $tahun.' tahun';
        }

        return $tahun.' tahun '.$bulan.' bulan';
    }
    public function getJadwal()
    {
        if (Carbon::parse($this->imunisasi->last()->jadwal->tanggal) == Carbon::today()) {
            return 'Hari ini';
        } elseif (Carbon::parse($this->imunisasi->last()->jadwal->tanggal) < Carbon::today()) {
            if ($this->imunisasi->last()->selesai) {
                return 'Selesai ('.Carbon::parse($this->imunisasi->last()->jadwal->tanggal)->isoFormat(' D MMM YYYY').' )';
            } else {
                return 'Terlewat ('.Carbon::parse($this->imunisasi->last()->jadwal->tanggal)->isoFormat(' D MMM YYYY').' )';
            }
        } else {
            return Carbon::parse($this->imunisasi->last()->jadwal->tanggal)->isoFormat(' D MMM YYYY');
        }
    }
}
