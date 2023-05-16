<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    //
    public function show($slug)
    {
        return view('mobil', [
            'mobil' => Mobil::where('slug', '=', $slug)->first()
        ]);
    }

    public function store(Request $request)
    {
        $mobil = new Mobil();

        $mobil->title = $request->title;
        $mobil->body = $request->body;
        $mobil->slug = $request->slug;

        $mobil->save();

        return response()->json(["result" => "ok"], 201);
    }

    public function destroy($mobilId)
    {
        $mobil = Mobil::find($mobilId);
        $mobil->delete();

        return response()->json(["result" => "ok"], 200);
    }

    public function update(Request $request, $mobilId)
    {
        $mobil = Mobil::find($mobilId);
        $mobil->title = $request->title;
        $mobil->body = $request->body;
        $mobil->slug = $request->slug;
        $mobil->save();

        return response()->json(["result" => "ok"], 201);
    }
}
