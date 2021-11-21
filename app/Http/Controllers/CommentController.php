<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Design;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Request $request, Design $design)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'rating' => 'required',
        ]);
        $validatedData['design_id'] = $design->id;
        $validatedData['user_id'] = auth()->user()->id;

        Comment::create($validatedData);

        return redirect()->back();
    }

    public function destroy(Comment $comment)
    {
        Comment::destroy($comment->id);

        return redirect()->back();
    }
}
