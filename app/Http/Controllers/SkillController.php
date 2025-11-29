<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    // Show all skills
    public function index()
    {
        $skills = Skill::all();
        return view('skills.index', compact('skills'));
    }

    // Show create form
    public function create()
    {
        return view('skills.create');
    }

    // Store skill
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'percentage' => 'required|integer|min:0|max:100',
        ]);

        Skill::create($request->all());

        return redirect()->back()->with('success', 'Skill added successfully!');
    }

    // Delete skill
    public function destroy($id)
    {
        Skill::findOrFail($id)->delete();
        return back()->with('success', 'Skill deleted successfully!');
    }
}
