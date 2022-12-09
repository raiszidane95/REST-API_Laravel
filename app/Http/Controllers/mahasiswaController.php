<?php

namespace App\Http\Controllers;

use App\mahasiswaModel;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index(){

        $mahasiswa = mahasiswaModel::all();
        dd($mahasiswa);
        return response()->json(['message'=>'success','data'=>$mahasiswa]);

    }

    public function show($id){
        $mahasiswa = mahasiswaModel::find($id);
        return response()->json(['message'=>'success','data'=>$mahasiswa]);
    }

    public function store(Request $request){

        $mahasiswa = mahasiswaModel::create($request->all());
        return response()->json(['message'=>'success','data'=>$mahasiswa]);

    }

    public function update(Request $request, $id){
        $mahasiswa = mahasiswaModel::find($id);
        $mahasiswa->update($request->all());
        return response()->json(['message'=>'success','data'=>$mahasiswa]);
    }

    public function destroy($id){
        $mahasiswa = mahasiswaModel::find($id);
        $mahasiswa->delete();
        return response()->json(['message'=>'success','data'=>$mahasiswa]);
    }
}
