<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postsTable = Config::get('filamentblog.tables.prefix') . 'posts';
        $categoriesTable = Config::get('filamentblog.tables.prefix') . 'categories';

        $blogs = \DB::table($postsTable)
            ->select('id', 'title', 'slug', 'sub_title', 'cover_photo_path', 'published_at')
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return response()->json([
            'success' => true,
            'data' => $blogs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $postsTable = Config::get('filamentblog.tables.prefix') . 'posts';
        $categoriesTable = Config::get('filamentblog.tables.prefix') . 'categories';

        $blog = \DB::table($postsTable)
            ->where('slug', $slug)
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->first();

        if (!$blog) {
            return response()->json([
                'success' => false,
                'message' => 'Blog not found.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $blog,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
