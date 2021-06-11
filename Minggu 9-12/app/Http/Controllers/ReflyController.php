<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReflyController extends Controller
{
    public function index(){

        //return "Hallo ini adalah method index, dalam controller SandoController.";
    	//return "Method ini nantinya akan digunakan untuk mengambil semua data user";
        $nama = "Mochammad Refly Agustino";

        $matkul = ["Pemrograman Lanjut","Fisika Teknik","Jaringan Komputer"];

        return view('Refly', compact('nama','matkul'));
    }

    Public function create(){
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menmabah data user";
    }

    public function store(Request $request){
        return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }

    public function show($id){
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=". $id;
    }

    public function edit($id){
        return "Method ini nantinya kan digunakan untuk menampilkan form untuk mengubah data edit dengan id=". $id;
    }

    public function update(Request $request, $id){
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=". $id;
    }

    public function destroy($id){
        return "Method ini nantinya akan digunakan untuk menghapus data user dnegan=id". $id;
    }

}
