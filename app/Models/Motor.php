<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Motor extends Model
{
    protected $collection = 'Motor';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'mesin',
        'tipe_suspensi',
        'tipe_transmisi',
    ];

    public function kendaraan()
    {
        return $this->hasOne(Kendaraan::class);
    }
}
