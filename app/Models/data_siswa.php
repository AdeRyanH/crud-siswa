<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_siswa extends Model
{
    use HasFactory;

    public $table = 'table_siswa';
    protected $fillable = ['nis','nama','kelas'];
}