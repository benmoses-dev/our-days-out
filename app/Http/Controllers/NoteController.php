<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        // Show all notes
        $notes = ['notes' => Note::with('user')
            ->latest()
            ->get()
        ];
        return view('notes.index', $notes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        // Form for creating a new note
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        // Store the note in the database
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:500'],
        ]);
        $request->user()->notes()->create($validated);
        return redirect(route('notes.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
