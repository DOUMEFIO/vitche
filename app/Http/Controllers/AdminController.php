<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
class AdminController extends Controller
{
    public function createAdmin(Request $request){
        $logo = time() . '.' . $request->avatar1->extension();
        $path = $request->file('avatar1')->storeAs(
        'logo', $logo , 'public'
            );

        $send = Admin::create([
            'logo' => '2222',
            'etablis' => $request->etablis,
            'email' => $request->email,
            ]);
        $send->logo=$path;        
        $send->save();
        return redirect()->route('register')->with('info1','L utilisateur a été ajoutée.');
    }  

    public function index(){
        $members=User::where('password','!=',' ')->where('fonction','!=','Professeur')->get();
        $membres=User::where('password',' ')->where('fonction','!=','Professeur')->get();
            return view('pages.membres.index',compact('members','membres'));
    } 

    public function prof_index(){
        $members=User::where('password','!=',' ')->where('fonction','Professeur')->get();
        $membres=User::where('password',' ')->where('fonction','Professeur')->get();
            return view('pages.profeseurs.index',compact('members','membres'));
    } 

    public function create(Request $request){  
        $idunique=time(); $vide=" ";
        $matiere=$request->matiere;
        $fonction="professeur";
        if($matiere){
            User::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'fonction' => $fonction,
                'contact' => $vide,
                'email' => $request->email,
                'password' =>$vide,
                'matiere' =>$matiere,
                'idUnique' => $idunique,
               ]);
        }
        else{
            User::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'fonction' => $request->fonction,
                'contact' => $vide,
                'email' => $request->email,
                'password' =>$vide,
                'matiere' =>$vide,
                'idUnique' => $idunique,
               ]); 
        }
       return redirect()->route('prof_index')->with('info1','L utilisateur a été ajoutée.');
    } 

    public function identifiant(Request $request){
        $idunique=$request->idunique;
        $membre=User::where('idUnique',$idunique)->first();
        //dd($membre);
        //dd($membre->password);
        if($membre !== null ){
            //dd('utilisateur exite');
            if($membre->password == " "){
               $id=$membre->id;
               //dd($id);
               return redirect()->route('edit')->with('info2',$id);
            }
            else{
                return redirect()->route('login')->with('info1',"Vous avez déja créer votre mot de passe");
            }
           }
        else{
            return redirect()->route('login')->with('info4',"Vous n'exister pas");
        }
    }

    public function edit(){
        return view('pages.password');
    }

    public function connect(){
        return redirect()->route('login')->with('info','Ressayer à nouveau' );
    }

    public function update(Request $request){
        $id=$request->id;
        $membre=User::where('id',$id)->first();
        
        $validatedData = $request->validate([
         'contact' => 'required|min:7',
         'password' => 'required|min:7',
        ]);

        if($validatedData){
         $validatedDat = User::whereId($id)->update([
             'contact' => $request->contact,
             'password' =>Hash::make($request->password),
         ]);
         return redirect()->route('login')->with('info3',"Inserer vos donner pour vous connecter");
        }
         return redirect()->route('login')->with('info2',"Inserer plus de huit caractère");
     }
}
