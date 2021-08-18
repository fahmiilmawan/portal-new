<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showAdminCarousel = Carousel::all();
        return view('admin.admincarousel', compact('showAdminCarousel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tambahAdminCarousel = Carousel::all();
        return view('content.addadmincarousel', compact('tambahAdminCarousel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeAdmCrl = new Carousel();
        $storeAdmCrl->caption = $request->caption;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/img/carousel', $filename);
            $storeAdmCrl->gambar = $filename;
        }

        $storeAdmCrl->save();
        return redirect('/admincarousel')->with('status', 'Carousel Berhasil Ditambahkan');
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
        $editAdminCarousel = Carousel::find($id);

        return view('content.editadmincarousel', compact('editAdminCarousel'));
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
        $storeAdmCrs = Carousel::find($id);
        $storeAdmCrs->caption = $request->caption;

        if ($request->hasFile('gambar')) {

            $destination = 'assets/img/carousel' . $storeAdmCrs->gambar;

            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/img/carousel', $filename);
            $storeAdmCrs->gambar = $filename;
        }

        $storeAdmCrs->update();
        return redirect('/admincarousel')->with('status', 'Carousel Berhasil Diubah');
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
