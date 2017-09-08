<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index(Request $request)
    {
    	return $request->user()->tweets()->with('user')->get();
    }

    public function store(Request $request)
    {
    	$valid = $this->validate($request, [
    		'body' => 'required',
    	]);

    	$tweet = $request->user()->tweets()->create($valid)->load('user');
    	return $tweet;
    }
}
