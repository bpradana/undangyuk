<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Design;

class DesignController extends Controller
{
    public function index()
    {
        $designs = Design::all();
        return view('designs.index', compact('designs'), ['title' => 'Designs']);
    }

    public function show($id)
    {
        $design = Design::findOrFail($id);
        return view('designs.show', compact('design'), ['title' => 'Design']);
    }
}
