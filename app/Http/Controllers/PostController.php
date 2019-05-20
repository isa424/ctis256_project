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

        $user = auth()->user();
        $user->posts()->save($post);

        return view('home', $post);
    }

    public function editPost(Request $request) {
        # code...
    }

    public function deletePost(int $id) {
        Post::where('id', $id)->delete();

        return response()->json(null);
    }

    /**
     * If already liked, removes the like. JSON
     */
    public function likePost(Request $request) {
        $this->validate($request, [
            'post' => 'required|numeric',
        ]);

        $like = new Like();
        $like->post_id = $request->input('post');
        
        auth()->user()->likes()->save($like);

        return response()->json(null);
    }
 
    /**
     * If already disliked, removes the dislike. JSON
     */   
    public function unlikePost(Request $request) {
        $this->validate($request, [
            'post' => 'required|numeric',
        ]);
    }
}
