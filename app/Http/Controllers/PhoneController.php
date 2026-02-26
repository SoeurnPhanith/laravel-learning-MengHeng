<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{

    //get result
    public function index(){
        $phones = Phone::all();
        return view('index_phone', compact('phones'));
    }

    //show add phone form
    public function add()
    {
        return view('add_phone');
    }

    //logic add phone to db
    public function insert(Request $request)
    {
        //check validation
        $request->validate([
            "model" => "required|max:50",
            "brand" => "required|max:50",
            "price" => "required|numeric|min:0",
            "description" => "required",
            "image" => "required|image|mimes:png,jpg,jpeg|max:2048"
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        //insert into db
        Phone::create([
            'model' => $request->model,
            'brand' => $request->brand,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imagePath
        ]);

        return redirect()->route('phone.index');
    }
}
