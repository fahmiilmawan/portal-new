<?php

namespace App\Http\Controllers\VisiMisi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visimisi;

class VisiMisiController extends Controller
{
    public function showAdminVisiMisi(){
        $showAdminVisiMisi = Visimisi::all();
        return view('content.visimisisetting',compact('showAdminVisiMisi'));
    }
    public function updateAdminVisiMisi(Request $request){
        $updateAdminVisiMisi = Visimisi::where('id',$request->id)->update([
            'content'=>$request->content
        ]);
        return redirect('/pengaturan-visimisi',compact('updateAdminVisiMisi'));
    }
    public function updateVisiMisi(Request $request, $id){

        $VisiMisiController = $request->visi_misi;

        $form = Visimisi::find($id);
        $form->content = $request->content;
        $form->save(); 

        return redirect('/pengaturan-visimisi')->with('success', 'berhasil diubah');

    }
}
