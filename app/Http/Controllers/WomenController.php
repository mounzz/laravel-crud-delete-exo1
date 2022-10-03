<?php

namespace App\Http\Controllers;

use App\Models\Utilisateurs;
use Illuminate\Http\Request;

class WomenController extends Controller
{
    public function Utilisateurs(){
        $women = Utilisateurs::where('genre', '=', 'female')->get();
        return view('pages.women', compact('women'));
    }

    public function destroy($id){
        $destroy = Utilisateurs::find($id);
        $destroy -> delete();
        return redirect()->back();
    }
}
