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
        $form = Visimisi::find($id);
        $form->visi = $request->visi;
        $form->misi = $request->misi;
        $form->save();

        return redirect('/pengaturan-visimisi')->with('success', 'berhasil diubah');
    }
}
