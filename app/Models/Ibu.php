<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ibu extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ibu';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
