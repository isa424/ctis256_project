<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
