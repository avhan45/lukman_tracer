<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $table = 'alumni';
    protected $primarykey = 'id';
    // protected $fillable = ['nama_lengkap', 'jk','asal_smu'];
    protected $guarded = [];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
