<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisImunisasi extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'jenis_imunisasi';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];
}
