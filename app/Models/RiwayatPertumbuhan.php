<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RiwayatPertumbuhan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'riwayat_pertumbuhan';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak', 'id');
    }
}
