<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class EntriesController extends Controller
{
    public function show()
    {
        $entries = Entry::all();
        return view('entries.show', compact('entries'));
    }

    public function create()
    {
        return view('entries.create');
    }

    public function store(Request $request)
    {
        Entry::create($request->all());

        return redirect(route('entries.show'));
    }
}
