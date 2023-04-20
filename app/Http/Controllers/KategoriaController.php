<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index(){
        $kategoriak =  Kategoria::all();
        return $kategoriak;
    }
    
    public function keres($id){
        $kategoria = Kategoria::find($id);
        return $kategoria;
    }

    public function torol($id){
        Kategoria::find($id)->delete();
    }

    public function ujKategoria(Request $request){
        $kategoria = new Kategoria();
        $kategoria->nev = $request->nev;
        $kategoria->save();
    }

    public function modositKategira(Request $request, $id){
        $kategoria = Kategoria::find($id);
        $kategoria->nev = $request->nev;
        $kategoria->save();        
    }
}
