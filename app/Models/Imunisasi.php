<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imunisasi extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'imunisasi';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak', 'id');
    }
    public function vaksin()
    {
        return $this->belongsTo(JenisVaksin::class, 'id_jenis_vaksin', 'id');
    }

    
    public function tanggalDijadwalkan()
    {
        if ($this->tanggal_dijadwalkan) {
            return Carbon::parse($this->attributes['tanggal_dijadwalkan'])->isoFormat('D MMMM YYYY');
        } else {
            return 0;
        }
    }
    public function tanggalImunisasi()
    {
        if ($this->tanggal_imunisasi) {
            return Carbon::parse($this->attributes['tanggal_imunisasi'])->isoFormat('D MMMM YYYY');
        } else {
            return 'Belum divaksin';
        }
    }
    public function cekStatus()
    {
        if ($this->tanggal_imunisasi) {
            if ($this->tanggal_imunisasi <= $this->tanggal_dijadwalkan) {
                return 1;
                // Selesai
            } else {
                return 2;
                // Terlambat imunisasi
            }
        } else {
            if (Carbon::today() > $this->tanggal_dijadwalkan) {
                return 3;
                // Belum diimunisasi
            } else {
                return 0;
                // Menunggu
            }
        }
    }
    public function toolTip()
    {
        if (Carbon::today() < $this->tanggal_dijadwalkan && Carbon::parse($this->tanggal_dijadwalkan)->diffInDays() < 1) {
            return 'Besok';
        } elseif (Carbon::today() < $this->tanggal_dijadwalkan) {
            return Carbon::parse($this->tanggal_dijadwalkan)->diffForHumans();
        } elseif (Carbon::parse($this->tanggal_dijadwalkan)->isSameDay(Carbon::now())) {
            return 'Hari ini';
        } else {
            return 'Anda telah melewatkan jadwal imunisasi';
        }
    }
    public function notificationStatus()
    {
        if (Carbon::today() < $this->tanggal_dijadwalkan && Carbon::parse($this->tanggal_dijadwalkan)->diffInDays() < 3) {
            return 1;
        } elseif (Carbon::today() < $this->tanggal_dijadwalkan) {
            return 2;
        } elseif (Carbon::parse($this->tanggal_dijadwalkan)->isSameDay(Carbon::now())) {
            return 3;
        } else {
            return 4;
        }
    }
}
