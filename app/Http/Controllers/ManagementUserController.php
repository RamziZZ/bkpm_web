<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller{

    public function index() {
        //return "Halo inin adalah method index, dalam controller ManagementUser.";
        $nama = "Ramzi Farhan Pratama";

        $Pelajaran =["Algoritma & Pemrograman","Kalkulus","Pemrograman web"];

        return view('home', compact('nama','Pelajaran'));
    }
    
    public function create() {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }

    public function store(Request $request) {
        return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }

    public function show($id) {
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id-" . $id;
    }

    public function edit($id) {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id-" . $id;
    }

    public function update(Request $request, $id) {
        return "Method ini nantinya akan digunakan untuk mengubah data user dngan id-" . $id;
    }

    public function destroy($id) {
        return "method ini nantinya digunakan untuk menghapus data user dengan id-" . $id;
    }

}