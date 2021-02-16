<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

use App\Http\Requests;

class AuthorsController extends Controller
{
    public function author(\App\Author $author)
    {
        return view('authors.author', compact('author'));
    }

    public function store(Request $request)
    {
        return Author::create($request->all());
    }

    public function update(Request $request, \App\Author $author)
    {
        $author->update($request->all());
        return response()->json($author, 200);
    }
    public function delete(\App\Author $author)
    {
        $author->delete();
        return response()->json(null, 204);
    }
}
