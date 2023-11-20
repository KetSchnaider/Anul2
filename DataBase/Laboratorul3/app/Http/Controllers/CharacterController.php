<?php

namespace App\Http\Controllers;

use App\Models\Character; 
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::latest()->paginate(5); 

        return view('characters.index', compact('characters'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required',
            'detail' => 'required',
        ]);

        Character::create($request->all());

        return redirect()->route('characters.index')->with('success', 'Character created successfully.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        return view('characters.show', compact('character')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        return view('characters.edit', compact('character')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Character $character)
    {
        $request->validate([
            'name'   => 'required',
            'detail' => 'required',
        ]);

        $character->update($request->all());

        return redirect()->route('characters.index')->with('success', 'Character updated successfully.'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        $character->delete();

        return redirect()->route('characters.index')->with('success', 'Character deleted successfully.'); 
    }
}
