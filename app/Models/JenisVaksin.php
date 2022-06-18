<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisVaksin extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'jenis_vaksin';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];
}
