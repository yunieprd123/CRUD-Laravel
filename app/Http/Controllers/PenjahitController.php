<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjahitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="Daftar Penjahit";
         $penjahit=[(object)[
            'id_penjual'=>1,
            'nama'=>'Penjahit 1',
            'nik' => '123456',
            'alamat'=> 'Singapadu',
            'nama_kelompok'=> 'Jaya Mula',
            'telp' => '082772892',
            'foto' => 'uploads/penjahits/penjahit1.png '
        ],(object)[
            'id_penjual'=>2,
            'nama'=>'Penjahit 2',
            'nik' => '32145',
            'alamat'=> 'Tegalalang',
            'nama_kelompok'=> 'Tani Maju',
            'telp' => '988292882 ',
            'foto' => 'uploads/penjahits/penjahit2.png'
            ]];
            //dapat juga disimpan dalam sebuah collection data
            //sehingga data petani dapat menggunakan beberapa fungsi collection
             $penjahit=collect($penjahit);
             //mengirimkan seluruh variabel untuk ditampilkan pada view
             return view('admin.daftarpenjahit',compact('title','penjahit'));
        }
    }