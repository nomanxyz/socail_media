<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $tweets = Tweet::whereIn('user_id', Auth::user()->following->pluck('id'))
                    ->orWhere('user_id', Auth::user()->id)
                    ->latest()
                    ->paginate(8);

        return view('tweets', compact('tweets'));
    }
}
