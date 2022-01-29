<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wisata1Controller extends Controller
{
    public function a()
    {
        return view('/profil/Galeri');
        //  return view('/profil/profil-sekolah', compact('/profil/profil-sekolah'));
}
public function b()
{
    return view('/profil/Hiburan');
}
public function c()
{
    return view('/profil/Paket');
}
public function d()
{
    return view('/profil/Pemandu');
}
public function e()
{
    return view('/profil/Penginepan');
}
public function g()
{
    return view('/profil/Rental');
}
public function h()
{
    return view('/profil/Rincian-biaya');
}
public function i()
{
    return view('/profil/Vidio');
}
public function k()
{
    return view('/profil/Kontak');
}
}
