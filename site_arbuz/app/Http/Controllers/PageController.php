<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Post\Comment;
use App\User;

class PageController extends Controller
{
    public function dostavka()
    {
        return view('header.dostavka');
    }

    public function about()
    {
        return view('header.about');
    }

    public function checkout()
    {
        return view('header.checkout');
    }

    public function faq()
    {
        return view('header.faq');
    }

    public function stocks()
    {
        return view('header.stocks');
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $comments = Comment::all();
        return view('catalog.product-view', compact('comments'))->with('product', $product);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
