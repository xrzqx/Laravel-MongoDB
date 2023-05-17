<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class mobilController extends Controller
{
    public function index()
    {
        $mobil = mobil::all();
        return response()->json(["status" => "ok", "data" => $mobil], 201);
    }

    public function show($slug)
    {
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'mesin' => 'required',
            'kapasitas_penumpang' => 'required',
            'tipe' => 'required',
            'tahun_keluaran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
        ]);

        $mobil = mobil::create(
            [
                "mesin" => $request->mesin,
                "kapasitas_penumpang" => $request->kapasitas_penumpang,
                "tipe" => $request->tipe
            ]
        );
        $kendaraan = $mobil->kendaraan()->create(
            [
                "tahun_keluaran" => $request->tahun_keluaran,
                "warna" => $request->warna,
                "harga" => $request->harga
            ]
        );

        return response()->json(["result" => "ok"], 201);
    }

    public function destroy($mobilId)
    {
        $mobil = mobil::find($mobilId);
        $mobil->delete();

        return response()->json(["result" => "ok"], 200);
    }

    public function update(Request $request, $mobilId)
    {
        $validated = $request->validate([
            'mesin' => 'required',
            'kapasitas_penumpang' => 'required',
            'tipe' => 'required',
        ]);

        $mobil = mobil::find($mobilId);
        $mobil->mesin = $request->mesin;
        $mobil->kapasitas_penumpang = $request->kapasitas_penumpang;
        $mobil->tipe = $request->tipe;
        $mobil->save();

        return response()->json(["result" => "ok"], 201);
    }
}
