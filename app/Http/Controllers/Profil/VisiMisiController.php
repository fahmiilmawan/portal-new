<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visimisi;

class VisiMisiController extends Controller
{
    public function showAdminVisiMisi()
    {
        $showAdminVisiMisi = Visimisi::all();
        return view('content.visimisisetting', compact('showAdminVisiMisi'));
    }
    public function updateAdminVisiMisi(Request $request, $id)
    {
        $VisiMisiController = $request->visi_misi;
        $form = Visimisi::find($id);
        $form->content = $request->content;
        $form->save();

        return redirect('/pengaturan-visimisi')->with('success', 'berhasil diubah');
    }
}
