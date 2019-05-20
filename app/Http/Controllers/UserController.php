<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\FriendRequestSent;
use App\Notifications\FriendRequestAccepted;
use App\Notifications\RemovedFromFriends;
use App\User;

class UserController extends Controller
{
    /**
     * Faran
     * Search for a user in the users table and return the result as an array
     */
    public function search(Request $request) {
        $users = [];
        $username = '';
        $user = auth()->user();

        if ($request->has('username')) {
            $username = $request->input('username');
            $users = User::where('id', '!=', $user->id)->where('name', 'LIKE', '%'. $username .'%')->get();
            $friendIds = \DB::table('friendships')->where('user_id', $user->id)->get()->pluck('id')->toArray();
            $users = $users->filter(function($user) use ($friendIds) {
                return !in_array($user->id, $friendIds);
            });
        }

        return view('search', ['users' => $users, 'username' => $username]);
    }

    /**
     * Faran
     * Get all the relevent information for a user profile and return it. User object, last 10
     * posts and comments chronological order. Friends list
     */
    public function profile($id) {
        $user = User::where('id', $id)->first();

        return view('userProfile', ['user' => $user]);
    }

    public function sendFriendRequest(Request $request)
    {
        $this->validate($request, [
            'user' => 'required|numeric',
            'friend' => 'required|numeric'
        ]);

        $user = User::where('id', $request->input('user'))->first();
        $friend = User::where('id', $request->input('friend'))->first();

        $friend->notify(new FriendRequestSent($user));
    }

    public function acceptFriendRequest($id, Request $request) {
        $n = \DB::table('notifications')->where('id', $id)->first();
        $user = auth()->user();
        $data = json_decode($n->data)->friend_id;
        $friend = User::where('id', $data)->first();

        $friend->notify(new FriendRequestAccepted($user));

        \Db::table('friendships')->insert([
            'user_id' => $user->id,
            'friend_id' => $friend->id,
        ]);
        \Db::table('friendships')->insert([
            'friend_id' => $user->id,
            'user_id' => $friend->id,
        ]);
        \DB::table('notifications')->where('id', $id)->delete();

        return redirect('/search');
    }

    public function removeFriend($id) {
        $friend = User::where('id', $id)->first();
        $user = auth()->user();

        \DB::table('friendships')->where('user_id', $user->id)->where('friend_id', $friend->id)->delete();
        \DB::table('friendships')->where('friend_id', $user->id)->where('user_id', $friend->id)->delete();

        $friend->notify(new RemovedFromFriends($user));

        return redirect('friendslist');
    }

    public function friendslist() {
        $friendIds = \DB::table('friendships')->where('user_id', auth()->id())->get()->pluck('friend_id');
        
        $friends = User::whereIn('id', $friendIds)->get();

        return view('friendslist', ['friends' => $friends]);
    }
}
