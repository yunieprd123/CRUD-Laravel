<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title="Data Mahasiswa";
        $data['mahasiswa']=array(
            'nim'=>'2255013003',
            'nama'=>'Yuni Pradnyani'
        );
        $data['mahasiswa']='';
        return view('admin.beranda', compact('title','data'));
    }
    public function dasboard(){
        $title="La Tailleur Dasboard";
       
        return view('admin.dasboard', compact('title'));
    }
}
