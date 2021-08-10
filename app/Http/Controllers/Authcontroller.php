<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119105,
            "Nama" => "Mariano Losa",
            "Gender" => "Male",
            "Phone" => 689610890003,
            "Kelas" => "XII RPL 3"
        ];
    }

}