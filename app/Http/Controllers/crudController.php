<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phoneDetails;


class crudController extends Controller
{

    public function template()
    {
        return view('addIphoneForm');
    }

    public function add_phone(Request $request)
    {
        $fileName = time().'.'.$request->file('image')
            ->getClientOriginalExtension(); 
        $request->file('image')->move(public_path('/img'), $fileName);

        $record = [
                'phone_name' => $request->input('phoneName'),
                'price' => $request->input('price'),
                'color' => $request->input('color'),
                'size' => $request->input('size'),
                'image' => $fileName,
                'processor' => $request->input('processor'),
                'ram' => $request->input('ram'),
                'storage' => $request->input('storage'),
                'camera' => $request->input('camera'),
                'display' => $request->input('display'),
        ];
        phoneDetails::create($record);

        return redirect('/')->with('success_message', 'New Record Added!');
    }

    public function phone_list(){
        $record = phoneDetails::all();
        $data = array(
            'record' => $record,
        );
        return view('phonesList', $data);
    }
}