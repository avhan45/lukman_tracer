<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $table = 'alumni';
    protected $primarykey = 'id_alumni';
    protected $fillable = ['nama_lengkap', 'jk','asal_smu'];
        
}
