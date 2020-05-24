<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Product;
use App\Post\Comment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index(){
        $comments = Comment::all();

        return view('catalog.product-view', compact('comments'));
    }

    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->body = $request->comment_body;
        $comment->commentable_id = $request['product_id'];
        $comment->save();
        return back();
    }

    public function show($id)
    {
        $comment = Comment::find($id);

        return view('catalog.product-view', compact('comment'));
    }

}
