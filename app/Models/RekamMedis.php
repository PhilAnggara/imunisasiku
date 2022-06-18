<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RekamMedis extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rekam_medis';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak', 'id');
    }


    public function tanggal()
    {
        return Carbon::parse($this->attributes['tanggal'])->isoFormat('dddd / D MMM YYYY');
    }
}
