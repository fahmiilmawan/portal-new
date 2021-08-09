<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Announce;
use App\Models\User;
use App\Models\Item;
use App\Models\Visimisi;

class Portal extends Controller
{

    public function index(){
        
        // $artikel = DB::table('posts')->orderBy('id', 'desc')->get();
        $artikel    = Post::latest()->take(4)->where('status', 'PUBLISH')->get();
        $announce   = Announce::latest()->take(1)->where('status', 'PUBLISH')->get();
        $carousel   = Item::orderby('id', 'desc')->where('id', 1)->first();
        $carousel_  = Item::orderby('id', 'desc')->where('id', 2)->first();
        

        return view ('index',compact('artikel', 'announce', 'carousel', 'carousel_'));
    }

    public function showAdmin(){

        $admin = DB::table('users')->orderby('id', 'desc')->get();
        
        return view('admin.admin', ['admin'=>$admin]);

    }
  

    
    public function addTags(Request $request){

        DB::table('category')->insert([
            'title' => $request->kategori,
        ]);

        return redirect('/tags')->with('success', 'Tags berhasil ditambahkan');

    }

    public function addAdmin(Request $request){

        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        auth()->user()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/admin')->with('success', 'Admin telah berhasil ditambahkan');

    }

    public function deleteAdmin($id){

        $delete = DB::table('users')->where('id', $id)->delete();

        return redirect('/admin')->with('delete', 'Admin telah dihapus');

    }

    public function editTags($id){

        $edit = DB::table('category')->where('id', $id)->first();

        return view('content.edittags', ['edit' => $edit]);

    }

    public function deleteTags($id){

        $delete = DB::table('category')->where('id', $id)->delete();

        return redirect('/tags')->with('delete', 'Tags berhasil dihapus');

    }

    public function updateTags(Request $request, $id){

        $tags = $request->kategori;

        $edit = DB::table('category')->where('id', $id)->update([
            'title' => $tags
        ]);

        return redirect('/tags');

    }

    public function tags(){
        $tags = DB::table('category')->orderBy('id', 'desc')->get();

        return view('admin.tags', ['tags'=>$tags]);
    }

    public function dashboard(){
        
        $data     = Post::count();
        $tags     = Category::count();
        $galeri   = Gallery::count();
        $announce = Announce::count();

        return view('admin.main', compact('data', 'tags', 'galeri', 'announce'));

    }

    public function addFoto(Request $request){

        $this->validate($request, [
            'foto' => 'required',
            'foto.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $files = $request->file('foto');

        foreach ($files as $file){

        $imgName = $file->getClientOriginalName() . '-' . rand(1, 20000) . '.' . $file->extension(); 

        $file->move(public_path('galeri'), $imgName);
        DB::table('galeri')->insert([
            'content' => $imgName,
            'deskripsi' => $request->deskripsi,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),

        ]);

        }

        return redirect('/foto')->with('success', 'Foto berhasil ditambahkan');

    }    

    public function showGaleri(){

        return view('galeri.galeri',[
            'galeri' => DB::table('galeri')->paginate(10)
        ]);
        // $galeri = Gallery::orderby('id', 'desc')->get();

        // return view('galeri.galeri', compact('galeri'));    

    }

    public function deleteFoto($id){

        $delete = DB::table('galeri')->where('id', $id)->delete();

        return redirect('/foto')->with('delete', 'Foto berhasil dihapus');

    }

    public function updatePassword(request $request){

        request()->validate([
            'old_password' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $currentPassword = auth()->user()->password;
        $oldPassword = $request->old_password;

        if(\Hash::check($oldPassword, $currentPassword)){

            auth()->user()->update([
                'name' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            return back()->with('success', 'Password sudah diubah');

        }else{

            return back()->withErrors(['old_password' => 'Pastikan data yang kamu masukan valid']);

        }

    }

    public function login(){

        if(\Auth::user()){
            return redirect()->back();
        }

        return view('auth.login');

    }

    public function upload(Request $request){

     if($request->hasFile('upload')) {
         $originName = $request->file('upload')->getClientOriginalName();
         $fileName = pathinfo($originName, PATHINFO_FILENAME);
         $extension = $request->file('upload')->getClientOriginalExtension();
         $fileName = $fileName.'_'.time().'.'.$extension;
        
         $request->file('upload')->move(public_path('content'), $fileName);
   
         $CKEditorFuncNum = $request->input('CKEditorFuncNum');
         $url = asset('content/'.$fileName); 
         $msg = 'Gambar berhasil diunggah'; 
         $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
         @header('Content-type: text/html; charset=utf-8'); 
         echo $response;

     }
    }

    public function carouselSetting(){

        $carousel = Item::orderby('id', 'desc')->where('title', 'Carousel')->get();


        return view('content.carouselsetting', compact('carousel'));

    }

    public function updateCarousel(Request $request, $id){

        $request->validate([
            'carousel' => 'required|image'
        ]);

        $delete = Item::all()->where('id', $id)->first();
        $image_path = public_path().'/assets/img/'.$delete->content;
        unlink($image_path);

        $img = $request->carousel->getClientOriginalName() . '-' . time() . '.' . $request->carousel->extension();

        $request->carousel->move(public_path('assets/img'), $img);

        $content = Item::find($id);
        $content->content = $img;

        $content->save();

        return redirect()->back()->with('success', 'Foto berhasil diubah');

    }

   

    

   
    public function showVisiMisi(){
        $showVisiMisi = Visimisi::all();
        return view ('profil.visi-misi',compact('showVisiMisi'));
    }

}
