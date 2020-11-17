<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    protected $fillable = [
        'nama_guru', 'mapel', 'tanggal_diperiksa'
    ];

    protected $primaryKey = 'id';
}
