<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ListeSortiesController extends Controller
{
    //
    public function index()
    {
        $sorties = DB::table('sorties')->orderBy('created_at','desc')->get();
        // $sorties=json_encode($sorties);

        $user = Auth::user();
        // return $sorties;
        return view('liste_sorties', ['sorties' => $sorties,'user'=>$user]);
    }
}
