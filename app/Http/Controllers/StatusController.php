<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Requests\StatusRequest;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    public function store(StatusRequest $request)
    {
        $request->identifier = Str::slug(Str::random(30) . Auth::user()->id);

        Auth::user()->tweets()->create($request->all());

        return back()->with('success', 'New tweet was created successfully!');
    }
}
