<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Post, User, Comment};

class CommentController extends Controller
{
    /**
     * JSON
     */
    public function makeComment(Request $request) {
        $this->validate($request, [
            'post' => 'required|numeric',
            'text' => 'required|string',
            'user' => 'required|numeric',
        ]);

        $post = Post::where('id', $request->input('post'))->first();

        if (!$post) {
            return response()->json(null, 404);
        }

        $comment = new Comment;
        $comment->text = $request->input('text');
        $comment->user_id = $request->input('user');

        $post->comments()->save($comment);
        $user = User::where('id', $request->input('user'))->first();

        return response()->json(['id' => $comment->id, 'username' => $user->name]);
    }

    // /**
    //  * JSON
    //  */
    // public function editComment(Request $request) {
    //     $this->validate($request, [
    //         'post' => 'required|numeric',
    //         'text' => 'required|string',
    //     ]);
    // }

    /**
     * JSON
     */
    public function deleteComment(Request $request) {
        # code...
    }
}
