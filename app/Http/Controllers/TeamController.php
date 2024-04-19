<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $teams = Team::where('name', 'like', "%$search%")->paginate(10);
        return view('teams', compact('teams'));
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);
        return view('team', compact('team'));
    }

    public function create()
{
    return view('teams.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    Team::create([
        'name' => $request->name,
    ]);

    return redirect('/teams')->with('success', 'Team succesvol aangemaakt!');
}
}
