<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use App\Models\KompetensiKeahlian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KompetensiKeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showKompetensiKeahlian = KompetensiKeahlian::all();
        return view('admin.adminkompetensikeahlian', compact('showKompetensiKeahlian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $editAdminKompetensiKeahlian = KompetensiKeahlian::find($id);

        return view('content.editadminkompetensikeahlian', compact('editAdminKompetensiKeahlian'));
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
        $storeAdmKKH = KompetensiKeahlian::find($id);
        $storeAdmKKH->nama_jurusan = $request->nama_jurusan;
        $storeAdmKKH->keterangan = $request->keterangan;
        $storeAdmKKH->sambutan_kepala_jurusan = $request->sambutan_kepala_jurusan;
        //Logo Jurusan
        if ($request->hasFile('logo_jurusan')) {

            $destination = 'assets\img\kompetensikeahlian' . $storeAdmKKH->logo_jurusan;

            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('logo_jurusan');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets\img\kompetensikeahlian', $filename);
            $storeAdmKKH->logo_jurusan = $filename;
        }

        //Foto Kepala Jurusan
        if ($request->hasFile('foto_kepala_jurusan')) {

            $destination = 'assets\img\kompetensikeahlian' . $storeAdmKKH->foto_kepala_jurusan;

            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('foto_kepala_jurusan');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets\img\kompetensikeahlian', $filename);
            $storeAdmKKH->foto_kepala_jurusan = $filename;
        }

        //Foto Kegiatan Jurusan
        if ($request->hasFile('foto_kegiatan_jurusan')) {

            $destination = 'assets\img\kompetensikeahlian' . $storeAdmKKH->foto_kegiatan_jurusan;

            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('foto_kegiatan_jurusan');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets\img\foto_kegiatan_jurusan', $filename);
            $storeAdmKKH->foto_kegiatan_jurusan = $filename;
        }

        $storeAdmKKH->update();
        return redirect('/adminkompetensikeahlian')->with('status', 'Kompetensi Keahlian Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
