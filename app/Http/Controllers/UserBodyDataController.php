<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BodyMeasurement;

class UserBodyDataController extends Controller
{
    //
    public function showBodyData()
    {
        $user = Auth::user();
        $bodyMeasurement = BodyMeasurement::where('user_id', $user->id)->first();
        // $bodyMeasurement = BodyMeasurement::where('user_id', $user->id)->firstOrFail();

        return view('user.bodydata', compact('bodyMeasurement'));
    }

    public function updateBodyData(Request $request)
    {
        $validatedData = $request->validate([
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'bust' => 'required|numeric',
            'under_bust' => 'nullable|numeric',
            'waist' => 'required|numeric',
            'hips' => 'required|numeric',
            'inseam' => 'nullable|numeric',
            'shoulder_width' => 'nullable|numeric',
            'sleeve_length' => 'nullable|numeric',
            'foot_size' => 'nullable|numeric',
            'concerns' => 'array'
        ]);

        $user = Auth::user();
        $userId = $user->id;

        $attributes = ['user_id' => $userId];
        $validatedData['user_id'] = $userId;

        $bodyMeasurement = BodyMeasurement::updateOrCreate($attributes, $validatedData);

        // $bodyMeasurement = BodyMeasurement::where('user_id', $user->id)->get();
        // $bodyMeasurement = BodyMeasurement::where('user_id', $user->id)->firstOrFail();

        // $bodyMeasurement->update([
        //     'height' => $request->input('height'),
        //     'weight' => $request->input('weight'),
        //     'bust' => $request->input('bust'),
        //     'under_bust' => $request->input('under_bust'),
        //     'waist' => $request->input('waist'),
        //     'hips' => $request->input('hips'),
        //     'inseam' => $request->input('inseam'),
        //     'shoulder_width' => $request->input('shoulder_width'),
        //     'sleeve_length' => $request->input('sleeve_length'),
        //     'foot_size' => $request->input('foot_size'),
        //     'concerns' => json_encode($request->input('concerns')),
        // ]);

        return redirect()->route('user.bodydata')->with('success', '体型データが更新されました。');
    }
}
