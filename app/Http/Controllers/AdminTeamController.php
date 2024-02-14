<?php

namespace App\Http\Controllers;

use App\Models\Team;

class AdminTeamController extends Controller
{
    protected function validateTeam(?Team $team = null): array
    {
        $team ??= new Team();

        return request()->validate([
            'name' => 'required',
            'avatar' => $team->exists ? ['image'] : ['required', 'image'],
            'position' => 'required',
            'social_fb' => 'required',
            'social_inst' => 'required',
            'social_tw' => 'required',
        ]);
    }
    public function index(){
        return view('admin.team.index',[
            'teams' => Team::paginate(10)
        ]);
    }
    public function create(){
        return view('admin.team.create');
    }

    public function edit(Team $team){
        return view('admin.team.edit',[
            'team' => $team
        ]);
    }
    public function store(){
        $team = Team::create(array_merge($this->validateTeam(), [
            'avatar' => request()->file('avatar')->store('thumbnails')
        ]));
        return redirect()->route('admin.team.edit', ['team' => $team->id])->with('success', 'Added!');
    }

    public function update(Team $team)
    {
        $attributes = $this->validateTeam($team);
        if ($attributes['avatar'] ?? false) {
            $attributes['avatar'] = request()->file('avatar')->store('thumbnails');
        }
        $team->update($attributes);
        return back()->with('success', 'Team Updated!');
    }

    public function destroy(Team $team)
    {
        $team->delete();
        return back()->with('success', 'Deleted!');
    }
}
