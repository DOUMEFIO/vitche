<?php

namespace App\Http\Controllers;
use App\Models\Emploi;
use App\Models\User;

use Illuminate\Http\Request;

class EmploiController extends Controller
{
    public function emploi(){
        $users=User::where('fonction','professeur')->get();
        return view('pages.emploi.index',compact('users'));
    }

    public function create_emploi(Request $request){
        Emploi::create([
            'jour' => $request->jour,
            'debut' => $request->debut,
            'fin' => $request->fin,
            'matiere' => $request->matiere,
            'id_User'=>$request->id_User,
           ]);
        return redirect()->route("emploi");
    }
}
