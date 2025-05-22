<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return 'index';
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::pluck('id', 'title');
   
        return view('dashboard.post.create', compact('categories'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //

        // $validated = validator::make(
        // $request->all(),
        // [
        // 'title' => 'required|string|max:500',
        // 'slug' => 'required|string|max:500',
        // 'descripcion' => 'nullable|string|max:100',
        // 'content' => 'nullable|string',
        // 'category_id' => 'required|exists:categories,id',
        // //     //'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // // $request->validate();

        // dd($validated->fails());

        // echo "not";
       

        Post::create($request->validated());

        return to_route('post.index')->with('success', 'Post created successfully');
        //(
        //     [
        //         'title' => $request->all()['title'],
        //         'slug' => $request->all()['slug'],
        //         'content' => $request->all()['content'],
        //         'category_id' => $request->all()['category_id'],
        //         'descripcion' => $request->all()['descripcion'],
        //         //'image' => $request->all()['image'],
        //     ]
        // );
         dd($request()->get('title'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
