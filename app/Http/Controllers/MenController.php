<?php

namespace App\Http\Controllers;

use App\Models\Utilisateurs;
use Illuminate\Http\Request;

class MenController extends Controller
{
    public function Utilisateurs(){
        $men = Utilisateurs::where('genre', '=', 'male')->take('15')->get();
        return view('pages.men', compact('men'));
    }

    public function destroy($id){
        $destroy = Utilisateurs::find($id);
        $destroy -> delete();
        return redirect()->back();
    }

}
