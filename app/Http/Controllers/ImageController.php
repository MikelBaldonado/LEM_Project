<?php

namespace App\Http\Controllers;
use App\Models\Images;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function create(){
        return view('image.index');
    }
    
    public function store(Request $request){
        $data = new Images();
        if($request->file('images')){
        // if($request->file('image_tbl')){
            $file = $request->file('images');
            // $file = $request->file('image_tbl');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Image/'), $filename);
            $data['images'] = $filename;
            // $data['image_filename'] = $filename;
        }
        $data->save();
        return redirect()->route('image.show');
    }
    public function show(){
        $imageData = Images::all();
        return view('image.view_image')->with('imageData', $imageData);
    }

}
