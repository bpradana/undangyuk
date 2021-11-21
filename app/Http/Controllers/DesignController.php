<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesignController extends Controller
{
    public function indexAll()
    {
        $designs = Design::latest()->get();
        return view('designs.index', compact('designs'), ['title' => 'Designs']);
    }

    public function index()
    {
        $designs = Design::where('user_id', Auth::user()->id)->get();
        return view('profile.index', compact('designs'), ['title' => 'My Designs']);
    }

    public function create()
    {
        return view('designs.create', ['title' => 'Create Design']);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Design::create($validatedData);

        return redirect('/profile');
    }

    public function show(Design $design)
    {
        return view('designs.show', compact('design'), ['title' => 'Design']);
    }

    public function edit(Design $design)
    {
        return view('designs.edit', compact('design'), ['title' => 'Edit Design']);
    }

    public function update(Request $request, Design $design)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
        ]);

        print_r($design);
        $validatedData['user_id'] = $design->user_id;

        Design::where('id', $design->id)->update($validatedData);

        return redirect('/profile');
    }

    public function destroy(Design $design)
    {
        Design::destroy($design->id);

        return redirect('/profile');
    }
}
