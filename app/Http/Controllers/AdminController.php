<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Models\Galeri;
class AdminController extends Controller
{
    public function galeriGet()
    {
        $galeris = Galeri::all();
        return view('admin.galeri.index', compact('galeris'));
    }
    public function galeriCreate()
    {
      return view('admin/galeri/create');
    }

    public function galeriEdit($id)
    {
      $galeri = Galeri::find($id);
      return view('admin.galeri.edit', compact('galeri'));
    }

        


    public function galeriPost(Request $req)
    {
        $id = $req->get('id');
        if($id){
            $galeri = Galeri::find($id);
        }else{
            $galeri = new Galeri;
        }

        if($req->foto){
            if($req->hasFile('foto')){
                $foto = $req->file('foto');
                $filename = time() . '.' . $foto->getClientOriginalExtension();
                $destinationPath = 'image/';                
                $foto->move($destinationPath, $filename);
            }
            $galeri->foto = $filename;
        }

        $galeri->judul = $req->judul;
        $galeri->save();
        return redirect()->route('admin.galeri.index')->with(['success' => 'Data Berhasil Di Simpan']);
    }
    
    public function galeriDel($id) {
        $galeri = Galeri::find($id);
        $galeri->delete();
      
        return redirect('/admin/galeri');
      }
        }

