<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\FriendRequestSent;
use App\Notifications\FriendRequestAccepted;
use App\User;

class UserController extends Controller
{
    /**
     * Faran
     * Search for a user in the users table and return the result as an array
     */
    public function search(Request $request) {
        $username = $request->input('username');

        return view('');
    }

    /**
     * Faran
     * Get all the relevent information for a user profile and return it. User object, last 10
     * posts and comments chronological order. Friends list
     */
    public function profile(Request $request) {
        return view('');
    }

    public function updateProfile(Request $request) {
        # code...
    }

    public function sendFriendRequest(Request $request)
    {
        $this->validate($request, [
            'user' => 'required|numeric',
            'friend' => 'required|numeric'
        ]);

        $user = User::where('id', $request->input('user'))->first();
        $friend = User::where('id', $request->input('friend'))->first();

        $user->notify(new FriendRequestSent($friend));
    }

    public function acceptFriendRequest(Request $request)
    {
        $this->validate($request, [
            'user' => 'required|numeric',
            'friend' => 'required|numeric'
        ]);

        $user = User::where('id', $request->input('user'))->first();
        $friend = User::where('id', $request->input('friend'))->first();

        $user->notify(new FriendRequestAccepted($friend));
    }
}
