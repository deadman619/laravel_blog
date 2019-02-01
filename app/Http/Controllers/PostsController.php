<?php

//php artisan make:auth
//php artisan make:model Category -mcr

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Comment;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'showPost', 'filterPosts']]);
    }
    public function index()
    {
        $posts = Post::paginate(3);
        return view('blog_theme.pages.Posts', compact('posts'));
    }

    public function showPost(Post $post) {

        $comments = Comment::where('post_id', '=', $post->id)->get();
        return view('blog_theme.pages.Post', compact(['post', 'comments']));
    }

    public function filterPosts(Category $category) {
        //$posts = Category::find($category->id)->posts; Pagination doesn't work
        $posts = Post::where('category_id', '=', $category->id)->paginate(3);
        return view('blog_theme.pages.Posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = Category::all();
        return view('blog_theme.pages.AddPost', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'post' => 'required',
            'category' => 'required'
        ]);
        Post::create([
            'title' => request('title'),
            'post' => request('post'),
            'category_id' => request('category'),
            'user_id' => auth()->user()->id
        ]);
        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        if(auth()->user()->id !== $post->user_id) {
            return redirect('posts')->with('error', 'Only the author can edit his own articles');
        }
        return view('blog_theme.pages.Edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate(request(), [
            'title' => 'required',
            'post' => 'required',
            'category' => 'required'
        ]);
        $post->update([
            'title' => request('title'),
            'post' => request('post'),
            'category_id' => request('category')
        ]);
        return view("blog_theme.pages.Post", compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if(auth()->user()->id !== $post->user_id) {
            return redirect('posts')->with('error', 'Only the author can delete his own articles');
        }
        $post->destroy($post->id);
        return redirect('/');
    }
}
