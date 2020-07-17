<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;


class NotesController extends Controller
{
    //
public function __construct()
{
  $this->middleware('auth');
}

/**
 * Display a listing of all notes.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
  $notes = Note::where('user_id', auth()->user()->id)
                  ->orderBy('updated_at', 'DESC')
                  ->get();

  return view('notes.index', compact('notes'));
}

/**
 * Show note.
 *
 * @return \Illuminate\Http\Response
 */
public function view($slug)
{
  $note = Note::where('slug', $slug)->first();
  return view('notes.view')->with('note', $note);

}

/**
 * Show the form for creating a new note.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
  return view('notes.create');
}

/**
 * Store a newly created note in database.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
  $note = Note::create([
    'user_id' => $request->user()->id,
    'title'   => $request->title,
    'slug'    => str_slug($request->title) . str_random(10),
    'body'    => $request->body
  ]);
  $request->session()->flash('status', 'Note has been created!');
  return redirect('/notes');
}
 }
 