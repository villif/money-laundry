<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    use HasFactory;

    protected $primaryKey ='id';
    public $incrementing = true;
    protected $table ='paket';
    protected $fillable = ['outlet_id','jenis','nama_paket','harga'];

    public function outlet()
    {
        return $this->belongsTo(Outlet::class);
    }

}
