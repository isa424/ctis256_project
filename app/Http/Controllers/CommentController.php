<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * JSON
     */
    public function makeComment(Request $request) {
        $this->validate($request, [
            'post' => 'required|numeric',
            'text' => 'required|string',
        ]);

        $post = Post::findById($request->input('post'));

        if (!$post) {
            return response()->json(null, 404);
        }

        $comment = new Comment;
        $comment->text = $request->input('title');
        $comment->user_id = auth()->id();

        $post->comments()->save($comment);

        return view('comments.view', $comment);
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
