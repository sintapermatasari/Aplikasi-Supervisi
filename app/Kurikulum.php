<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
     protected $fillable = [
        'tanggal', 'nama'
    ];
}
