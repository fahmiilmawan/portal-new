<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showAdminGuruStaff = Guru::latest()->paginate(5);
        return view('admin.admingurustaff', compact('showAdminGuruStaff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tambahAdminGuruStaff = Guru::all();
        return view('content.addadmingurustaff', compact('tambahAdminGuruStaff'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeAdmGS = new Guru();
        $storeAdmGS->nip_guru = $request->nip_guru;
        $storeAdmGS->nama_guru = $request->nama_guru;
        $storeAdmGS->jabatan_guru = $request->jabatan_guru;
        $storeAdmGS->mapel_diampu_guru = $request->mapel_diampu_guru;
        $storeAdmGS->jenis_kelamin_guru = $request->jenis_kelamin_guru;
        $storeAdmGS->biodata_guru = $request->biodata_guru;

        if ($request->hasFile('foto_guru')) {
            $file = $request->file('foto_guru');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/img/gurustaff', $filename);
            $storeAdmGS->foto_guru = $filename;
        }

        $storeAdmGS->save();
        return redirect('/admingurustaff')->with('status', 'Guru Berhasil Ditambahkan');
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
        $editAdminGuruStaff = Guru::find($id);

        return view('content.editadmingurustaff', compact('editAdminGuruStaff'));
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
        $storeAdmGS = Guru::findOrFail($id);
        $storeAdmGS->nip_guru = $request->nip_guru;
        $storeAdmGS->nama_guru = $request->nama_guru;
        $storeAdmGS->jabatan_guru = $request->jabatan_guru;
        $storeAdmGS->mapel_diampu_guru = $request->mapel_diampu_guru;
        $storeAdmGS->jenis_kelamin_guru = $request->jenis_kelamin_guru;
        $storeAdmGS->biodata_guru = $request->biodata_guru;

        if ($request->hasFile('foto_guru')) {

            $destination = 'assets/img/gurustaff' . $storeAdmGS->foto_guru;

            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('foto_guru');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/img/gurustaff', $filename);
            $storeAdmGS->foto_guru = $filename;
        }

        $storeAdmGS->update();
        return redirect('/admingurustaff')->with('status', 'Guru / Staff Berhasil Diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus      = Guru::where('id', $id);

        $hapus->delete();

        return redirect()->back()->with('delete', 'Guru berhasil dihapus');
    }
}
