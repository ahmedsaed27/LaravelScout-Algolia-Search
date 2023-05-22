<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = ($request->searchable) ?  User::search($request->searchable)->get() : User::all();

        return view('search' , compact('user'));
    }
}
