<?php

namespace App\Http\Controllers;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function class(){
        $classes=Classe::all();
        return view('pages.classe.index',compact('classes'));
    }

    public function create_class(Request $request){
        Classe::create([
            'nom'=>$request->nom,
        ]);
        return redirect()->route('class');
    }
}
