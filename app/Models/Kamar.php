<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamar';

    protected $fillable = [
        'tipe_kamar', 'foto', 'stok', 'harga'
    ]; 
    
    public function fasilitaskamar()
    {
        return $this->hasMany(FasilitasKamar::class,'id_kamar', 'id');
    }

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class,'id_kamar', 'id');
    }

}
