<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $primaryKey ='id';
    public $incrementing = true;
    protected $table ='paket';
    protected $fillable = ['nama','alamat','jenis_kelamin','telepon'];
}
