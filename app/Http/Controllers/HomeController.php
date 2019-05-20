<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Post, User};

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
     * Faran
     * Find all friends of the authenticated user and fetch their posts from the db and return in the view as
     * an array. Also each post object should contain properties like number of comments, author user object,
     * number of likes, disklikes. The number of posts should be limited to 10. When user clicks on 'Next' it
     * should return the next 10 posts in chronological order. User should be able to specify the order the posts
     * need to be sorted by: Ascending or Descending by creation date.
     */
    public function index()
    {
        $notifications = \DB::table('notifications')->where('notifiable_id', auth()->id())->whereNull('read_at')->get();
        $friendIds = $notifications->pluck('data')->map(function($data) {
            return ((array) json_decode($data))['friend_id'];
        })->toArray();

        $friends = User::whereIn('id', $friendIds)->get();
        $notifications = $notifications->map(function($notification) use ($friends) {
            $friendId = ((array) json_decode($notification->data))['friend_id'];
            $friend = $friends->first(function($user) use ($friendId) {
                return $friendId == $user->id;
            });

            if ($friend) {
                $notification->friend = $friend;
            }

            return $notification;
        });

        $friendIds = \DB::table('friendships')->where('user_id', auth()->id())->get()->pluck('friend_id');
        $unreadCount = $notifications->filter(function($n) {
            return !$n->read_at;
        })->count();

        $friendIds[] = auth()->id();
        $posts = Post::whereIn('user_id', $friendIds)->with('comments')->simplePaginate(10);

        return view('home', ['posts' => $posts, 'notifications' => $notifications, 'unread_count' => $unreadCount]);
    }
}
