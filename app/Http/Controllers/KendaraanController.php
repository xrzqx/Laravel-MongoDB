<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Mobil;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return response()->json(["status" => "ok", "data" => $kendaraan], 201);
    }

    public function show($slug)
    {

    }

    public function destroy($kendaraanId)
    {
        $kendaraan = kendaraan::find($kendaraanId);
        $kendaraan->delete();

        return response()->json(["result" => "ok"], 200);
    }

    public function update(Request $request, $kendaraanId)
    {
        $validated = $request->validate([
            'tahun_keluaran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
        ]);

        $kendaraan = Kendaraan::find($kendaraanId);
        $kendaraan->tahun_keluaran = $request->tahun_keluaran;
        $kendaraan->warna = $request->warna;
        $kendaraan->harga = $request->harga;
        $kendaraan->save();

        return response()->json(["result" => "ok"], 201);
    }
}
