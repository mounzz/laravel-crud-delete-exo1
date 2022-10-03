<?php

namespace App\Http\Controllers;

use App\Models\Utilisateurs;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function Utilisateurs(){
        $user = Utilisateurs::all();
        return view('pages.users', compact('user'));
    }

    public function destroy($id){
        $destroy = Utilisateurs::find($id);
        $destroy -> delete();
        return redirect()->back();
    }
}
