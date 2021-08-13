<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\KepsekModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KepsekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showAdmKepsek = KepsekModel::orderBy('id', 'desc')->get();
        return view('admin.adminkepsek', compact('showAdmKepsek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tambahAdmKepsek = KepsekModel::all();
        return view('content.addadminkepsek', compact('tambahAdmKepsek'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeAdmKp = new KepsekModel();
        $storeAdmKp->sambutan_kepsek = $request->sambutan_kepsek;

        if ($request->hasFile('foto_kepsek')) {
            $file = $request->file('foto_kepsek');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets\img\kepsek', $filename);
            $storeAdmKp->foto_kepsek = $filename;
        }

        $storeAdmKp->save();
        return redirect('/adminkepsek')->with('status', 'Kepala Sekolah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editAdmKp = KepsekModel::find($id);

        return view('content.editadminkepsek', compact('editAdmKp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editAdmKp = KepsekModel::find($id);
        $editAdmKp->sambutan_kepsek = $request->sambutan_kepsek;

        if ($request->hasFile('foto_kepsek')) {

            $destination = 'assets\img\kepsek' . $editAdmKp->foto_kepsek;

            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('foto_kepsek');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets\img\kepsek', $filename);
            $editAdmKp->foto_kepsek = $filename;
        }

        $editAdmKp->update();
        return redirect('/adminkepsek')->with('status', 'Foto / Sambutan Kepala Sekolah Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $delete = KepsekModel::find($id);

        $delete->delete();

        return redirect()->back()->with('delete', 'Foto / Sambutan Kepala Sekolah berhasil dihapus');
    }
}
