<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Mobil extends Model
{
    protected $collection = 'Mobil';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'mesin',
        'kapasitas_penumpang',
        'tipe',
    ];
    
    public function kendaraan()
    {
        return $this->hasOne(Kendaraan::class);
    }
}
