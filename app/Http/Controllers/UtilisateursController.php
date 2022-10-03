<?php

namespace App\Http\Controllers;

use App\Models\Utilisateurs;
use Illuminate\Http\Request;

class UtilisateursController extends Controller
{

    public function Utilisateurs(){
        $user = Utilisateurs::all();
        return view('AddUsers', compact('user'));
    }

    public function destroy($id){
        $destroy = Utilisateurs::find($id);
        $destroy -> delete();
        return redirect()->back();
    }

    public function store(Request $request){
        $user = new Utilisateurs;
        $user -> nom = $request -> nom;
        $user -> genre = $request -> genre;
        $user -> age = $request -> age;
        $user -> save();
        return redirect('/');
    }
}
