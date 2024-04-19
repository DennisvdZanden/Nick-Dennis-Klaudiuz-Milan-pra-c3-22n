<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;

class TournamentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $tournaments = Tournament::where('name', 'like', "%$search%")->paginate(10);
        return view('tournaments', compact('tournaments'));
    }

    public function show($id)
    {
        $tournament = Tournament::findOrFail($id);
        return view('tournament', compact('tournament'));
    }

    public function create()
{
    return view('tournaments.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',

    ]);

    Tournament::create([
        'name' => $request->name,
    ]);

    return redirect('/tournaments')->with('success', 'Toernooi succesvol aangemaakt!');
}
}
