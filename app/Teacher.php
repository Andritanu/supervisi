<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Teacher extends Model
{
    protected $fillable = [
        'id_guru', 'nama_guru', 'materi', 'status', 'upload', 'tanggal_upload'
    ];

    protected $primaryKey = 'id_guru';
}