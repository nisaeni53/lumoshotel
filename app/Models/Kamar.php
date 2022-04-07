<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamar';

    protected $fillable = [
        'id_fasilitask', 'tipe_kamar', 'foto', 'stok'
    ]; 
    
    public function fasilitask()
    {
        return $this->hasOne(FasilitasKamar::class,'id', 'id_fasilitask');
    }

}
