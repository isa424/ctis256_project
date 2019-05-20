<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\{Post, Like};

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

        return redirect('/home');
    }

    public function editPost(Request $request) {
        # code...
    }

    public function deletePost(int $id) {
        Post::where('id', $id)->delete();

        return redirect('/home');
    }

    /**
     * If already liked, removes the like. JSON
     */
    public function likePost(Request $request) {
        $like = new Like();
        $like->post_id = $request->input('post');
        $like->user_id = $request->input('user');
        $like->save();

        return response()->json(null);
    }
 
    /**
     * If already disliked, removes the dislike. JSON
     */   
    public function unlikePost(Request $request) {
        Like::where('post_id', $request->input('post'))->where('user_id', $request->input('user'))->delete();

        return response()->json(null);
    }
}
