<?php

namespace App\Http\Controllers\Pengunguman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Announce;

class Pengunguman extends Controller
{
    
    public function show(){

        $announce = Announce::orderby('id', 'desc')->get();

        return view('admin.announce', compact('announce'));

    }

    public function formEdit($id){

        $show = Announce::find($id);

        return view('content.editpengunguman', compact('show'));

    }

    public function updatePengunguman(Request $request, $id){

        $pengunguman = $request->announcement;

        $form = Announce::find($id);
        $form->announcement = $request->announcement;
        $form->status = $request->status;
        $form->save(); 

        return redirect('/pengunguman')->with('success', 'Pengunguman berhasil diubah');

    }

    public function addAnnounce(Request $request){

        $announce = new Announce;

        $announce->announcement = $request->pengunguman;
        $announce->status = $request->status;

        $announce->save();

        return redirect('/pengunguman');

    }

    public function formAdd(){

        $form = Announce::all();

        return view('content.addpengunguman', compact('form'));

    }

    public function deletePengunguman($id){

        $delete = Announce::find($id);

        $delete->delete();

        return redirect()->back()->with('delete', 'Pengunguman berhasil dihapus');

    }

}
