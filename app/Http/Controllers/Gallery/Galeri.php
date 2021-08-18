<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class Galeri extends Controller
{
    // public function index()
    // {
    //     
    // }
    public function foto(){
        $foto = Gallery::latest()->paginate(5);
        return view('admin.foto', compact('foto'));
        // $foto = DB::table('galeri')->orderby('id', 'desc')->get();
        // $foto = Gallery::orderby('id', 'desc')->get();
        // return view('admin.foto', compact('foto'));

    }
    

}
