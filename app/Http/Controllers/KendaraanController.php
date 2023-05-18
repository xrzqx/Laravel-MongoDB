<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Mobil;
use App\Models\Motor;

class KendaraanController extends Controller
{
    public function index()
    {
        #this is not good for production it should
        #save new kendaraan_list in database
        #and fetch from there
        $kendaraan = Kendaraan::all();
        $kendaraan_list = array();
        foreach ($kendaraan as $value){
            // return $value;
            if (isset($value->motor_id)) {
                # code...
                $data_dumy = (object) [];
                $data_motor = Motor::where('_id', '=', $value->motor_id)->get();
                $data_dumy->_id = $value->_id;
                $data_dumy->tahun_keluaran = $value->tahun_keluaran;
                $data_dumy->warna = $value->warna;
                $data_dumy->harga = $value->harga;
                $data_dumy->motor = $data_motor;
                array_push($kendaraan_list,$data_dumy);
            }
            if (isset($value->mobil_id)) {
                # code...
                $data_dumy = (object) [];
                $data_mobil = Mobil::where('_id', '=', $value->mobil_id)->get();
                $data_dumy->_id = $value->_id;
                $data_dumy->tahun_keluaran = $value->tahun_keluaran;
                $data_dumy->warna = $value->warna;
                $data_dumy->harga = $value->harga;
                $data_dumy->mobil = $data_mobil;
                array_push($kendaraan_list,$data_dumy);
            }
        }
        return response()->json(["status" => "ok", "data" => $kendaraan_list], 201);
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
