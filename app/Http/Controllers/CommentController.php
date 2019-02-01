<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use URL;

class CommentController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

	public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc');
        return compact('comments');
    }

    public function store(Request $request){
    	$this->validate($request, [
            'comment' => 'required',
        ]);
        $comment = new Comment;
        $comment->comment = $request->input('comment');
        $comment->postId = $request->id;
        $comment->userId = auth()->user()->id;
        $comment->save();
        return redirect('posts')->with('success', 'Comment Created');
    }

    public function vote(Request $request){
    	$comment = Comment::find($request->id);
    	$comment->update();    	
    	return redirect(URL::previous());
    }
}
