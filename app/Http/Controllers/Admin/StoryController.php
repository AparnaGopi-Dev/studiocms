<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoryController extends Controller
{
    /**
     * Display all stories.
     */
    public function index()
    {
        $stories = Story::latest()->get();

        return view('admin.stories.index', compact('stories'));
    }

    /**
     * Show create form.
     */
    public function create()
    {
        return view('admin.stories.create');
    }

    /**
     * Store new story.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('cover_image')) {
            $imagePath = $request->file('cover_image')->store('stories', 'public');
        }

        Story::create([
            'title' => $request->title,
            'description' => $request->description,
            'cover_image' => $imagePath,
        ]);

        return redirect()
            ->route('admin.stories.index')
            ->with('success', 'Story created successfully.');
    }

    /**
     * Display a single story.
     */
    public function show(string $id)
    {
        $story = Story::with('photos')->findOrFail($id);

        return view('admin.stories.show', compact('story'));
    }

    /**
     * Show edit form.
     */
    public function edit(string $id)
    {
        $story = Story::with('photos')->findOrFail($id);

        return view('admin.stories.edit', compact('story'));
    }

    /**
     * Update story.
     */
    public function update(Request $request, string $id)
    {
        $story = Story::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('cover_image')) {

            if ($story->cover_image && Storage::disk('public')->exists($story->cover_image)) {
                Storage::disk('public')->delete($story->cover_image);
            }

            $story->cover_image = $request->file('cover_image')->store('stories', 'public');
        }

        $story->title = $request->title;
        $story->description = $request->description;

        $story->save();

        return redirect()
            ->route('admin.stories.index')
            ->with('success', 'Story updated successfully.');
    }

    /**
     * Delete story.
     */
    public function destroy(string $id)
    {
        $story = Story::findOrFail($id);

        if ($story->cover_image && Storage::disk('public')->exists($story->cover_image)) {
            Storage::disk('public')->delete($story->cover_image);
        }

        $story->delete();

        return redirect()
            ->route('admin.stories.index')
            ->with('success', 'Story deleted successfully.');
    }
}