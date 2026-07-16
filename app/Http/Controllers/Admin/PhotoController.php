<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;


class PhotoController extends Controller
{
    public function store(Request $request, $storyId)
    {
        $request->validate([
            'images' => 'required',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        foreach ($request->file('images') as $image) {

            $path = $image->store('stories', 'public');

            Photo::create([
                'story_id' => $storyId,
                'image' => $path,
            ]);
        }

        return back()->with('success', 'Images uploaded successfully.');
    }

    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);

        // delete file from storage
        if ($photo->image && Storage::disk('public')->exists($photo->image)) {
            Storage::disk('public')->delete($photo->image);
        }

        // delete from DB
        $photo->delete();

        return back()->with('success', 'Image deleted successfully.');
    }
}
