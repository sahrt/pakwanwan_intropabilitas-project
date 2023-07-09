<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kucing_model;

class kucingController extends Controller
{
     public function kucingView() {
      
        $data['allDataKyn']=kucing_model::all();
        return view('backend.kucing.view_user', $data);
    }
    // CREATE
    public function kucingAdd() {
        // $allDataUser=User::all();
        // $data['allDataUser']=User::all();
        return view('backend.kucing.add_user');
    }
    //FUNCTION MELAKUKAN CREATE
    public function kucingStore(Request $request) {
        $data=new kucing_model();
        $data->nama=$request->nama;
        $data->umur=$request->umur;
        $data->jenis=$request->jenis;
        $data->harga=$request->harga;
        $data->stock=$request->stock;

        $data->save();

        return redirect()->route('kucing.view')->with('info', 'Tambah kucing berhasil');
    }


    //UPDATE


    public function kucingEdit($id) {
        // dd('berhasil masuk ke controller edit');

        $editData= kucing_model::find($id);
        return view('backend.kucing.edit_user', compact('editData'));
    }

    public function kucingUpdate(Request $request, $id) {

        $data=kucing_model::find($id);
        $data->nama=$request->nama;
        $data->umur=$request->umur;
        $data->jenis=$request->jenis;
        $data->harga=$request->harga;
        $data->stock=$request->stock;
        // $data->password=bcrypt($request->password);
        $data->save();

        return redirect()->route('kucing.view')->with('info', 'Update kecing berhasil');
    }


    //DELETE
    public function kucingDelete($id) {
        // dd('berhasil masuk ke controller edit');

        $deleteData= kucing_model::find($id);
        $deleteData->delete();

        return redirect()->route('kucing.view')->with('info', 'Delete kucing berhasil');
    }
}
