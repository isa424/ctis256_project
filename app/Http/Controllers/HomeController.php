<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Find all friends of the authenticated user and fetch their posts from the db and return in the view as an array.
     * Also each post object should contain properties like number of comments, author user object, number of likes.
     * The number of posts should be limited to 10. When user clicks on 'Next' it should return the next 10 posts in
     * chronological order.
     */
    public function index()
    {
        return view('home');
    }
}
