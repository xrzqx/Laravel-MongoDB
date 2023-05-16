<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;

class MotorController extends Controller
{
    //
    public function show($slug)
    {
        return view('motor', [
            'motor' => Motor::where('slug', '=', $slug)->first()
        ]);
    }

    public function store(Request $request)
    {
        $motor = new Motor();

        $motor->title = $request->title;
        $motor->body = $request->body;
        $motor->slug = $request->slug;

        $motor->save();

        return response()->json(["result" => "ok"], 201);
    }

    public function destroy($motorId)
    {
        $motor = Motor::find($motorId);
        $motor->delete();

        return response()->json(["result" => "ok"], 200);
    }

    public function update(Request $request, $motorId)
    {
        $motor = Motor::find($motorId);
        $motor->title = $request->title;
        $motor->body = $request->body;
        $motor->slug = $request->slug;
        $motor->save();

        return response()->json(["result" => "ok"], 201);
    }
}
