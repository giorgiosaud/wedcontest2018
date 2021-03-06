<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store()
    {
        request()->validate([
            'image' => ['required'],
        ]);
        $data = request()->file('image')->store('temp', 'public');

        return response(compact('data'), 201);
    }
}
//
