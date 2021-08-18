<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use App\Models\Ekstrakulikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class EkstrakulikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showAdminEkstrakuliker = Ekstrakulikuler::all();
        return view('admin.adminekstrakulikuler', compact('showAdminEkstrakuliker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tambahEkstrakulikuler = Ekstrakulikuler::all();
        return view('content.addadminekstrakulikuler', compact('tambahEkstrakulikuler'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeAdmEks = new Ekstrakulikuler();
        $storeAdmEks->nama_ekstrakulikuler = $request->nama_ekstrakulikuler;
        $storeAdmEks->keterangan_ekstrakulikuler = $request->keterangan_ekstrakulikuler;

        if ($request->hasFile('logo_ekstrakulikuler')) {
            $file = $request->file('logo_ekstrakulikuler');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/img/ekstrakulikuler', $filename);
            $storeAdmEks->logo_ekstrakulikuler = $filename;
        }

        $storeAdmEks->save();
        return redirect('/adminekstrakulikuler')->with('status', 'Ekstrakulikuler Berhasil Ditambahkan');
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
        $editAdminEkstrakulikuler = Ekstrakulikuler::find($id);

        return view('content.editadminekstrakulikuler', compact('editAdminEkstrakulikuler'));
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
        $storeAdmEks = Ekstrakulikuler::find($id);
        $storeAdmEks->nama_ekstrakulikuler = $request->nama_ekstrakulikuler;
        $storeAdmEks->keterangan_ekstrakulikuler = $request->keterangan_ekstrakulikuler;

        if ($request->hasFile('logo_ekstrakulikuler')) {

            $destination = 'assets/img/ekstrakulikuler' . $storeAdmEks->logo_ekstrakulikuler;

            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('logo_ekstrakulikuler');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/img/ekstrakulikuler', $filename);
            $storeAdmEks->logo_ekstrakulikuler = $filename;
        }

        $storeAdmEks->update();
        return redirect('/adminekstrakulikuler')->with('status', 'Ekstrakulikuler Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus      = Ekstrakulikuler::where('id', $id);
        $hapus->delete();
        return redirect()->back()->with('delete', 'Ekstrakulikuler berhasil dihapus');
    }
}
