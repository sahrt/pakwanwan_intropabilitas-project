<?php

namespace App\Http\Controllers\kuliah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kuliah;
class kuliahController extends Controller
{
    
    public function kuliahView() {
      
        $data['allDataKyn']=Kuliah::all();
        return view('backend.kuliah.view_user', $data);
    }
    // CREATE

    public function kuliahEdit($id) {
        // dd('berhasil masuk ke controller edit');

        $editData= Kuliah::find($id);
        return view('backend.kuliah.edit_user', compact('editData'));
    }

    public function kuliahUpdate(Request $request, $id) {

        $data=Kuliah::find($id);
        $data->kodekuliah=$request->kodekuliah;
        $data->namakuliah=$request->namakuliah;
        $data->pengajar=$request->pengajar;
        // $data->password=bcrypt($request->password);
        $data->save();

        return redirect()->route('kuliah.view')->with('info', 'Update kuliah berhasil');
    }
}
