<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){
        $nom='benrhouma';
        $prenom='nermine';
        return view('etudiant',compact('nom','prenom'));
    }
}
