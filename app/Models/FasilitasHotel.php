<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasHotel extends Model
{
    use HasFactory;

    protected $table = 'fasilitash';

    protected $fillable = [
        'nama_fasilitas', 'foto', 'keterangan'
    ]; 
}
