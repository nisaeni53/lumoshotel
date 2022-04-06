<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasKamar extends Model
{
    use HasFactory;

    protected $table = 'fasilitask';

    protected $fillable = [
        'nama_fasilitas', 'foto'
    ]; 
    
    public function fasilitask()
    {
        return $this->hasMany(Produk::class,'id_fasilitask', 'id');
    }
}
