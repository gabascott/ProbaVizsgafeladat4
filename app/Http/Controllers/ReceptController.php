<?php

namespace App\Http\Controllers;

use App\Models\Recept;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceptController extends Controller
{
    public function index(){
        $receptek =  Recept::all();
        return $receptek;
    }

    public function receptekKatNevvel(){
        $receptek =  DB::table('recepts as r')
        ->select('r.nev', 'k.nev', 'kep_eleresi_ut', 'leiras')
        ->join('kategorias as k', 'r.kat_id', '=', 'k.nev')
        ->get();
        return $receptek;
    }
    
    public function keres($id){
        $recept = Recept::find($id);
        return $recept;
    }

    public function torol($id){
        Recept::find($id)->delete();
    }

    public function ujRecept(Request $request){
        $recept = new Recept();
        $recept->nev = $request->nev;
        $recept->kat_id = $request->kat;
        $recept->kep_eleresi_ut = $request->kep_eleresi_ut;
        $recept->leiras = $request->leiras;
        $recept->save();
    }

    public function modositRecept(Request $request, $id){
        $recept = Recept::find($id);
        $recept->nev = $request->nev;
        $recept->kat_id = $request->kat;
        $recept->kep_eleresi_ut = $request->kep_eleresi_ut;
        $recept->leiras = $request->leiras;
        $recept->save();        
    }
}
