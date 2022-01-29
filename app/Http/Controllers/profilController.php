<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    public function a()
    {
        return view('/wisata/Galeri');
        //  return view('/profil/profil-sekolah', compact('/profil/profil-sekolah'));
}
public function b()
{
    return view('/wisata/hiburan');
}
public function c()
{
    return view('/wisata/paket');
}
public function d()
{
    return view('/wisata/pemandu');
}
public function e()
{
    return view('/wisata/Penginapan');
}
public function g()
{
    return view('/wisata/Rental');
}
public function h()
{
    return view('/wisata/rincian');
}
public function i()
{
    return view('/wisata/Vidio');
}
public function k()
{
    return view('/wisata/kontak');
}
}