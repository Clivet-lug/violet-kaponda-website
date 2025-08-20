<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {
        $images = collect(Storage::disk('public')->files('blog/images'))
            ->map(function ($file) {
                return [
                    'name' => basename($file),
                    'path' => $file,
                    'url' => Storage::disk('public')->url($file),
                    'size' => Storage::disk('public')->size($file),
                    'modified' => Storage::disk('public')->lastModified($file)
                ];
            })
            ->sortByDesc('modified')
            ->values();

        return view('admin.media.index', compact('images'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'files' => 'required|array',
            'files.*' => 'image|mimes:jpeg,png,jpg,webp|max:10240'
        ]);

        $uploaded = [];

        foreach ($request->file('files') as $file) {
            $path = $file->store('blog/images', 'public');
            $uploaded[] = [
                'name' => $file->getClientOriginalName(),
                'path' => $path,
                'url' => Storage::disk('public')->url($path)
            ];
        }

        return response()->json([
            'success' => true,
            'files' => $uploaded
        ]);
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'path' => 'required|string'
        ]);

        if (Storage::disk('public')->exists($request->path)) {
            Storage::disk('public')->delete($request->path);
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'File not found']);
    }
}
