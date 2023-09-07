<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Event;

class EventController extends Controller
{
    public function Create()
    {
        return Inertia::render('Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required|date',
        ]);

        Event::create([
            'title' => $request->input('title'),
            'date' => $request->input('date'),
        ]);

        return redirect()->route('events.index');
    }

    public function index()
    {
        $events = Event::all();
        return Inertia::render('Events/Index', ['events' => $events]);
    }
}
