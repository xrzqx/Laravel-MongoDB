<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Kendaraan;
use App\Models\Motor;
use App\Models\Mobil;
use Illuminate\Support\Str;

class DiagramTest extends TestCase
{
    // use DatabaseMigrations;
    /**
     * A basic unit test for CRUD.
     *
     * @return void
     */
    public function test_insert_motor()
    {
        $str_rand_mesin = Str::random(20);
        $str_rand_tipe_suspensi = Str::random(20);
        $str_rand_tipe_transmisi = Str::random(20);
        $motor = Motor::create(
            [
                "mesin" => "mesin $str_rand_mesin",
                "tipe_suspensi" => "tipe $str_rand_tipe_suspensi",
                "tipe_transmisi" => "tipe $str_rand_tipe_transmisi"
            ]
        );
        $kendaraan = $motor->kendaraan()->create(
            [
                "tahun_keluaran" => "tahun keluar",
                "warna" => "warna hitam",
                "harga" => "Rp 100000"
            ]
        );
    }
    public function test_insert_mobil()
    {
        $str_rand_mesin = Str::random(20);
        $str_rand_tipe_suspensi = Str::random(20);
        $str_rand_tipe_transmisi = Str::random(20);
        $mobil = Mobil::create(
            [
                "mesin" => "mesin $str_rand_mesin",
                "kapasitas_penumpang" => "4",
                "tipe" => "tipe $str_rand_tipe_transmisi"
            ]
        );
        $kendaraan = $mobil->kendaraan()->create(
            [
                "tahun_keluaran" => "tahun keluar",
                "warna" => "warna putih",
                "harga" => "Rp 444444"
            ]
        );
    }
}
