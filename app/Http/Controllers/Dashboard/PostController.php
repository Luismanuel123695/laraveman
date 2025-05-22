<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $post = Post::find(2)->delete();



        // $post -> update(
        //     [
        //         'title' => 'Post 1 new',
        //         'slug' => 'test slug',
        //         'content' => 'test content',

        //         'image' => 'test image',
        //     ]
        // ); 


        //         $post = Post::create(
        //     [
        //         'title' => 'Post 1',
        //         'slug' => 'test slug',
        //         'content' => 'test content',
        //         'category_id' => 1,
        //         'descripcion' => 'test descripcion',
        //         'posted' => 'not',
        //         'image' => 'test image',
        //     ]
        // ); 

        //dd($post);



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
    public function store(Request $request)
    {
        //

        $request->validate([
            'title' => 'required|string|max:500',
            'slug' => 'required|string|max:500',
            'descripcion' => 'nullable|string|max:100',
            'content' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            //'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        echo "not";
       

        Post::create($request->all());

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
