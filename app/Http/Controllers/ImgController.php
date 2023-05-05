<?php

namespace App\Http\Controllers;

use App\Models\ImageModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImgController extends Controller
{
    public function show_img(Request $request)
    {
        $show = $request->all();
        return view('img',compact('show'));
    }
    public function imgstore(REquest $request)
    {
        $store = $request->validate([
            'name'=> 'required',
            'imgpath'=> 'required'
        ]);
        $store = $request->file('imgpath')->store('public/images');
        $store = new ImageModel([
            'name'=> $request->input('name'),
            'imgpath' => $store
        ]);
        $store->save();
         return redirect()->back();
    }
}
