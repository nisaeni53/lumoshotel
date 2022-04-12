<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';

    protected $fillable = [
        'id_kamar', 'nama_pemesan', 'nomor_telepon', 'check_in', 'check_out', 'jumlah_kamar', 'status'
    ]; 
    
    public function kamar()
    {
        return $this->hasOne(Kamar::class,'id', 'id_kamar');
    }
}
