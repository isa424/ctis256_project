<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostController extends Controller
{
    public function makePost(Request $request) {
        $this->validate($request, [
            'title' => 'required|string',
            'text' => 'required|string',
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->text = $request->input('title');
        $post->user_id = auth()->id();

        $user = auth()->user();
        $user->posts()->save($post);

        return view('posts.view', $post);
    }

    public function editPost(Request $request) {
        # code...
    }

    public function deletePost(Request $request) {
        # code...
    }

    /**
     * If already liked, removes the like. JSON
     */
    public function likePost(Request $request) {
        # code...
    }
 
    /**
     * If already disliked, removes the dislike. JSON
     */   
    public function dislikePost(Request $request) {
        # code...
    }
}
