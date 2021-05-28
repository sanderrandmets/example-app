<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{

    public function create()
    {
        return view('content.create');
    }

    public function save(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'file' => 'required|file'
        ]);

        Content::create([
            'name' => $data['name'],
            'file' => Storage::putFile('content', $data['file']),
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('dashboard');
    }


    public function edit(Content $item) {
        return view("edit", compact("item"));
    }

    public function update(Request $req) {
        $item = Content::find($req->id);
        $item->title = $req->title;
        $item->body = $req->body;
        $item->save();
    }

    public function delete(Content $item) {
        $item->delete();

        return redirect()->route("dashboard");

    }
}

//$extension = $request->file('avatar')->extension();
//Storage::put('file.flp', $contents, 'public');
