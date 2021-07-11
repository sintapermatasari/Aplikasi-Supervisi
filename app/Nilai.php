<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $fillable = [
        'nip', 'nama', 'mapel', 'file', 'status'
    ];
}
