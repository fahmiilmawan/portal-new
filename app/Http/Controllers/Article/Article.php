<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use hash;

class Article extends Controller
{

    public function listArtikel(){

        $list = Post::latest()->where('status', 'PUBLISH')->paginate(8);

        return view('artikel', compact('list'));

    }
    
    public function showArticle(){
        // $artikel = DB::table('posts')->orderby('id', 'desc')->get();
        $artikel = Post::latest()->paginate(8);

        return view('admin.artikel', compact('artikel'));
    }

    public function formArticle(){

        // $tags = DB::table('category')->orderBy('id', 'desc')->get();
        $article = Category::orderby('id', 'desc')->get();

        return view('content.addarticle', compact('article'));

    }

    public function detailArtikel($slug){

        // $artikel = DB::table('posts')->where('slug', $slug)->first();
        $artikel = Post::where('slug', $slug)->firstOrFail();

        return view('content.details', compact('artikel'));

    }

    // Process insert
    public function addArticle(Request $artikel){

        $artikel->validate([
            'deskripsi' => 'required|max:140'
        ]);

        $imgName = $artikel->thumbnail->getClientOriginalName() . '-' . time() . '.' . $artikel->thumbnail->extension();

        $artikel->thumbnail->move(public_path('content'), $imgName);
        $auth = \Auth::user()->name;

        DB::table('posts')->insert([
            'category' => $artikel->category,
            'title' => $artikel->title,
            'author' => $auth,
            'slug' => Str::slug($artikel->title, '-'),
            'thumbnail' => $imgName,
            'deskripsi' => $artikel->deskripsi,
            'content' => $artikel->konten,
            'status' => $artikel->status,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);

        return redirect('/artikel')->with('success', 'Artikel berhasil ditambahkan');
    }

    // Process delete
    public function deleteArticle($id){

        $hapus      = DB::table('posts')->where('id', $id);
        $image_path = public_path().'/content'.$hapus->thumbnail;
        unlink($image_path);

        $hapus->delete();

        return redirect()->back()->with('delete', 'Artikel berhasil dihapus');

    }

    // Process update
    public function editArticle($id){

        $artikel = Post::find($id);
        $edit    = Category::all();

        return view('content.editarticle', compact('artikel', 'edit'));

    }

    public function updateProcess(Request $request, $id){

        $request->validate([
            'deskripsi' => 'required|max:140'
        ]);

        if(!$request->thumbnail){

            $article = Post::find($id);
            $article->category = $request->category;
            $article->title = $request->title;
            $article->slug = Str::slug($request->title);
            $article->deskripsi = $request->deskripsi;
            $article->content = $request->konten;
            $article->status = $request->status;

            $article->save();

        }else{
            $imgName = $request->thumbnail->getClientOriginalName() . '-' . time() . '.' . $request->thumbnail->extension();

            $request->thumbnail->move(public_path('content'), $imgName);

            $article = Post::find($id);
            $article->category = $request->category;
            $article->title = $request->title;
            $article->slug = Str::slug($request->title);
            $article->thumbnail = $imgName;
            $article->deskripsi = $request->deskripsi;
            $article->content = $request->konten;
            $article->status = $request->status;

            $article->save();
        }

        return redirect('/artikel')->with('success', 'Artikel berhasil diubah');

    }


}
