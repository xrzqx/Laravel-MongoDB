<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    //
    public function show($slug)
    {
        return view('kendaraan', [
            'kendaraan' => Kendaraan::where('slug', '=', $slug)->first()
        ]);
    }

    public function store(Request $request)
    {
        $kendaraan = new Kendaraan();

        $kendaraan->title = $request->title;
        $kendaraan->body = $request->body;
        $kendaraan->slug = $request->slug;

        $kendaraan->save();

        return response()->json(["result" => "ok"], 201);
    }

    public function destroy($kendaraanId)
    {
        $kendaraan = kendaraan::find($kendaraanId);
        $kendaraan->delete();

        return response()->json(["result" => "ok"], 200);
    }

    public function update(Request $request, $kendaraanId)
    {
        $kendaraan = Kendaraan::find($kendaraanId);
        $kendaraan->title = $request->title;
        $kendaraan->body = $request->body;
        $kendaraan->slug = $request->slug;
        $kendaraan->save();

        return response()->json(["result" => "ok"], 201);
    }
}
