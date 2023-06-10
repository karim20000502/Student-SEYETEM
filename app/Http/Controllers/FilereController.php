<?php

namespace App\Http\Controllers;
use App\Models\Filere;
use Illuminate\Http\Request;

class FilereController extends Controller
{
    public function index(){
        $filere  = Filere::all();
        return view('filere.index' , compact('filere'));
    }
    public function create(){
       
        return view('filere.create');
    }

    public function store(Request $request){
        
        $filere = new Filere();
        $filere->filere=$request->filere;
        $filere->save();
        return redirect('filere');
    }

    public function edit($id){
        $filere  = Filere::find($id);
        return view('filere.edit',compact('filere'));
    }

    public function update(Request $request,$id){
        $filere = Filere::find($id);
        $filere ->filere = $request->filere;
        $filere->update();
        return redirect('filere');
    }

    public function destroy($id){
        Filere ::destroy($id);
        return redirect('filere');
    }
}
