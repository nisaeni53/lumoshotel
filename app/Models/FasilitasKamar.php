<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasKamar extends Model
{
    use HasFactory;

    protected $table = 'fasilitask';

    protected $fillable = [
        'id_kamar', 'nama_fasilitas'
    ]; 
    
    public function kamar()
    {
        return $this->hasOne(Kamar::class,'id', 'id_kamar');
    }
}
