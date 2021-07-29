<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    //

    public function index(){
        $notes = Note::all();

        return view('notes.index', compact('notes'));
    }

    public function store(){

        request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Note::create(request(['title', 'description']));

        return redirect('/notes');
    }
}
