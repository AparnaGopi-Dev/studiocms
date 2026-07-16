<?php

namespace App\Http\Controllers;

use App\Models\Story;

class StoryController extends Controller
{
    public function publicIndex()
{
    $stories = Story::latest()->get();

    return view('frontend.stories', compact('stories'));
}


public function publicShow($id)
{
    $story = Story::with('photos')->findOrFail($id);

    return view('frontend.story-detail', compact('story'));
}
}