<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Portal;
use App\Http\Controllers\Article\Article;
use App\Http\Controllers\Gallery\Galeri;
use App\Http\Controllers\Pengunguman\Pengunguman;
use App\Http\Controllers\Auth\Auth;
use App\Http\Controllers\Index\CarouselController;
use App\Http\Controllers\Index\KepsekController;
use App\Http\Controllers\Profil\EkstrakulikulerController;
use App\Http\Controllers\Profil\GuruController;
use App\Http\Controllers\Profil\KompetensiKeahlianController;
use App\Http\Controllers\Profil\SejarahSingkatController;
use App\Http\Controllers\Profil\VisiMisiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ROUTE HALAMAN INDEX
Route::get('/', [Portal::class, 'index']);
Route::get('/galery', [Portal::class, 'showGaleri']);

//ROUTE PROFIL
Route::get('/profilsekolah', [Portal::class, 'indexProfilSekolah']);
Route::get('/visi-misi', [Portal::class, 'showVisiMisi']);
Route::get('/sejarah-singkat', [Portal::class, 'showSejarahSingkat']);
Route::get('/guru-staff', [Portal::class, 'showGuruPage']);

//Route Kompetensi Keahlian USER
Route::get('/kompetensi-keahlian', [Portal::class, 'indexKompetensiKeahlian']);
Route::get('/rekayasa-perangkat-lunak', [Portal::class, 'showKompetensiKeahlianRPL']);
Route::get('/bisnis_daring_pemasaran', [Portal::class, 'showKompetensiKeahlianBDP']);
Route::get('/teknik_bisnis_sepeda_motor', [Portal::class, 'showKompetensiKeahlianTBSM']);
Route::get('/teknik_kendaraan_ringan_otomotif', [Portal::class, 'showKompetensiKeahlianTKRO']);
Route::get('/akuntansi', [Portal::class, 'showKompetensiKeahlianAK']);
//END ROUTE KOMPETENSI KEAHLIAN USER
//END ROUTE PROFIL


// Auth
Route::group(['middleware' => 'auth'], function () {

    // 
    // Route admin dan proses add & delete
    Route::get('/profil', function () {
        return view('admin.profil');
    });
    Route::get('/admin', [Portal::class, 'showAdmin']);
    Route::get('/tambah-admin', function () {
        return view('content.addadmin');
    });
    Route::post('tambah-admin/addadmin', [Portal::class, 'addAdmin']);
    // 
    // 

    Route::get('/main', [Portal::class, 'dashboard']);
    Route::get('/artikel', [Article::class, 'showArticle']);
    Route::get('/tags', [Portal::class, 'tags']);
    Route::get('/foto', [Galeri::class, 'foto']);
    Route::get('/pengunguman', [Pengunguman::class, 'show']);



    Route::get('/logout', [Auth::class, 'logout'])->name('logout');

    // 
    // add process
    Route::get('/tambah-tags', function () {
        return view('content.addtags');
    });
    Route::get('/tambah-foto', function () {
        return view('content.addfoto');
    });
    Route::post('/addannounce-process', [Pengunguman::class, 'addAnnounce']);
    Route::get('/tambah-pengunguman', [Pengunguman::class, 'formAdd']);
    Route::post('/addfoto-process', [Portal::class, 'addFoto']);
    Route::post('/addtags-process', [Portal::class, 'addTags']);
    Route::get('/tambah-artikel', [Article::class, 'formArticle']);
    Route::post('/add-process', [Article::class, 'addArticle']);
    // end
    // 

    // 
    // update password admin
    Route::post('/profil/ubah-password', [Portal::class, 'updatePassword']);
    // end
    // 

    // 
    // edit process
    Route::get('/artikel/{id}/edit-article', [Article::class, 'editArticle']);
    Route::put('/artikel/{id}', [Article::class, 'updateProcess']);

    Route::get('/tags/{id}/edit-tags', [Portal::class, 'editTags']);
    Route::put('/tags/{id}', [Portal::class, 'updateTags']);

    Route::get('/pengunguman/{id}/edit-pengunguman', [Pengunguman::class, 'formEdit']);
    Route::put('/pengunguman/{id}', [Pengunguman::class, 'updatePengunguman']);

    // end
    // 

    // 
    // delete process
    Route::get('/foto/{id}/deleteFoto', [Portal::class, 'deleteFoto']);
    Route::get('/tags/{id}/deleteTags', [Portal::class, 'deleteTags']);
    Route::get('/admin/{id}/delete-admin', [Portal::class, 'deleteAdmin']);
    Route::get('/artikel/{id}/delete-article', [Article::class, 'deleteArticle']);
    Route::get('/pengunguman/{id}/delete-pengunguman', [Pengunguman::class, 'deletePengunguman']);
    // end
    //

    //INDEX HALAMAN DEPAN ADMIN
    Route::get('/admincarousel', [CarouselController::class, 'index']);
    Route::get('/tambahadmincarousel', [CarouselController::class, 'create']);
    Route::post('/tambahadmincarousel', [CarouselController::class, 'store']);
    Route::get('/admincarousel/{id}/editadmincarousel', [CarouselController::class, 'edit']);
    Route::put('/admincarousel/{id}', [CarouselController::class, 'update']);
    Route::get('/adminkepsek', [KepsekController::class, 'index']);
    Route::get('/tambahadminkepsek', [KepsekController::class, 'create']);
    Route::post('/tambahadminkepsek', [KepsekController::class, 'store']);
    Route::get('/adminkepsek/{id}/editadminkepsek', [KepsekController::class, 'edit']);
    Route::put('/adminkepsek/{id}', [KepsekController::class, 'update']);
    Route::get('/adminkepsek/{id}/deleteadminkepsek', [KepsekController::class, 'destroy']);
    //END INDEX HALAMAN DEPAN

    //PROFIL SEKOLAH
    Route::get('/adminkompetensikeahlian', [KompetensiKeahlianController::class, 'index']);
    Route::get('/adminkompetensikeahlian/{id}/editadminkompetensikeahlian', [KompetensiKeahlianController::class, 'edit']);
    Route::put('/adminkompetensikeahlian/{id}', [KompetensiKeahlianController::class, 'update']);

    Route::get('/admingurustaff', [GuruController::class, 'index']);
    Route::get('/tambahadmingurustaff', [GuruController::class, 'create']);
    Route::post('/tambahadmingurustaff', [GuruController::class, 'store']);
    Route::get('/admingurustaff/{id}/editadmingurustaff', [GuruController::class, 'edit']);
    Route::put('/admingurustaff/{id}', [GuruController::class, 'update']);
    Route::get('/admingurustaff/{id}/deleteadmingurustaff', [GuruController::class, 'destroy']);

    Route::get('/adminekstrakulikuler', [EkstrakulikulerController::class, 'index']);
    Route::get('/tambahadminekstrakulikuler', [EkstrakulikulerController::class, 'create']);
    Route::post('/tambahadminekstrakulikuler', [EkstrakulikulerController::class, 'store']);
    Route::get('/adminekstrakulikuler/{id}/editadminadminekstrakulikuler', [EkstrakulikulerController::class, 'edit']);
    Route::put('/adminekstrakulikuler/{id}', [EkstrakulikulerController::class, 'update']);
    Route::get('/adminekstrakulikuler/{id}/deleteadminadminekstrakulikuler', [EkstrakulikulerController::class, 'destroy']);

    Route::get('/adminsejarahsingkat', [SejarahSingkatController::class, 'index']);
    Route::put('/adminsejarahsingkat/{id}', [SejarahSingkatController::class, 'update']);

    Route::get('/pengaturan-visimisi', [VisiMisiController::class, 'showAdminVisiMisi']);
    Route::put('/pengaturan-visimisi/{id}', [VisiMisiController::class, 'updateAdminVisiMisi']);
    //END PROFIL SEKOLAH


    // CK Editor
    Route::post('/test/Ck', [Portal::class, 'upload'])->name('ckeditor.upload');
});

// Login
Route::get('/login', [Portal::class, 'login'])->name('login');
Route::post('/login-process', [Auth::class, 'loginProcess'])->name('loginProcess');;

// Route artikel
Route::get('/detail-artikel/{slug}', [Article::class, 'detailArtikel']);

// Route index
//Routing Profil



// ROUTING EKSTRAKULER
Route::get('/ekstrakurikuler', function () {
    return view('ekstrakurikuler.ekstrakurikuler');
});
Route::get('/ekstrakurikuler1', function () {
    return view('ekstrakurikuler.ekstrakurikuler1');
});
Route::get('/ekstrakurikuler2', function () {
    return view('ekstrakurikuler.ekstrakurikuler2');
});
Route::get('/ekstrakurikuler3', function () {
    return view('ekstrakurikuler.ekstrakurikuler3');
});
Route::get('/ekstrakurikuler4', function () {
    return view('ekstrakurikuler.ekstrakurikuler4');
});

//ROUTING PEMBELAJARAN

Route::get('/pembelajaran', function () {
    return view('pembelajaran');
});
//ROUTING CONTACT
Route::get('/contact', function () {
    return view('hubungi-kami');
});
Route::get('/list-artikel', [Article::class, 'listArtikel']);
//