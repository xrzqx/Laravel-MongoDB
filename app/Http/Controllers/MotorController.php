<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;

class motorController extends Controller
{
    public function index()
    {
        $motor = Motor::all();
        return response()->json(["status" => "ok", "data" => $motor], 201);
    }

    public function show($slug)
    {
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'mesin' => 'required',
            'tipe_suspensi' => 'required',
            'tipe_transmisi' => 'required',
            'tahun_keluaran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
        ]);

        $motor = Motor::create(
            [
                "mesin" => $request->mesin,
                "tipe_suspensi" => $request->tipe_suspensi,
                "tipe_transmisi" => $request->tipe_transmisi
            ]
        );
        $kendaraan = $motor->kendaraan()->create(
            [
                "tahun_keluaran" => $request->tahun_keluaran,
                "warna" => $request->warna,
                "harga" => $request->harga
            ]
        );

        return response()->json(["result" => "ok"], 201);
    }

    public function destroy($motorId)
    {
        $motor = motor::find($motorId);
        $motor->delete();

        return response()->json(["result" => "ok"], 200);
    }

    public function update(Request $request, $motorId)
    {
        $validated = $request->validate([
            'mesin' => 'required',
            'tipe_suspensi' => 'required',
            'tipe_transmisi' => 'required',
        ]);

        $motor = motor::find($motorId);
        $motor->mesin = $request->mesin;
        $motor->tipe_suspensi = $request->tipe_suspensi;
        $motor->tipe_transmisi = $request->tipe_transmisi;
        $motor->save();

        return response()->json(["result" => "ok"], 201);
    }
}
