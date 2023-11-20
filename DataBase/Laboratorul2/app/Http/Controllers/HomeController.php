<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $allPersonaje =  DB::table('personaje')->get();


        return view('welcome', ['personaje' => $allPersonaje]);
    }
    public function store(Request $request)
{
    $characterId = $request->input('character');
}
}
