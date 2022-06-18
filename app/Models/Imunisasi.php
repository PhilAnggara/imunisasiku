<?php

namespace App\Models;

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
}
