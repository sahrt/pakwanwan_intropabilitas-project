<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\barang;

class barangController extends Controller
{
      // READ
      public function barangView() {
      
        $data['allDataBrn']=barang::all();
        return view('backend.barang.view_user', $data);
    }
    // CREATE
    public function barangAdd() {
        // $allDataUser=User::all();
        // $data['allDataUser']=User::all();
        return view('backend.barang.add_user');
    }
    //FUNCTION MELAKUKAN CREATE
    public function barangStore(Request $request) {
        $data=new barang();
        $data->nama=$request->nama;
        $data->perusahaan=$request->perusahaan;
        $data->jumblah=$request->jumlah;
        $data->jenis=$request->jenis;

        $data->save();

        return redirect()->route('barang.view')->with('info', 'Tambah barang berhasil');
    }


    //UPDATE


    public function barangEdit($id) {
        // dd('berhasil masuk ke controller edit');

        $editData= barang::find($id);
        return view('backend.barang.edit_user', compact('editData'));
    }

    public function barangUpdate(Request $request, $id) {

        $data=barang::find($id);
        $data->nama=$request->nama;
        $data->perusahaan=$request->perusahaan;
        $data->jumblah=$request->jumlah;
        $data->jenis=$request->jenis;
        // $data->password=bcrypt($request->password);
        $data->save();

        return redirect()->route('barang.view')->with('info', 'Update barang berhasil');
    }


    //DELETE
    public function barangDelete($id) {
        // dd('berhasil masuk ke controller edit');

        $deleteData= barang::find($id);
        $deleteData->delete();

        return redirect()->route('barang.view')->with('info', 'Delete barang berhasil');
    }

}
