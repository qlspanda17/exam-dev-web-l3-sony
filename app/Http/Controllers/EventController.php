<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Validation\Rules\Date;
use App\Models\Event;
use Illuminate\Validation\Validator;



class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('event_date')->get();
        
        // return $events;
        return view('events.index', [
            'events' => $events,
        ]);
    }

    public function show(int $id)
    {
        $event = Event::findOrFail($id);

        return view('events.show', [
            'event' => $event,
        ]);
    }

    public function base() 
    {

        return view('salut') ;

        

        
    }

   
    

    public function store(Request $request): RedirectResponse
{
    $validated = $request->validate([
            'title' => 'required|string|max:150',
            'description' => 'required',
            'date' => 'required|date_format:d-m-Y',
            'location' =>  'max:150',

        ]);


        $event = Event::create($validated);


    return redirect('/events')->with('success', 'Evenement créer avec succèss');
}

    public function update(Request $request, Event $event)
{
    $request->validate([
            'title' => 'required|string|max:150',
            'description' => 'required',
            'event_date' => 'required|date_format:d-m-Y',
            'location' =>  'max:150',

        ]);

    $event->update($request->all());
    return redirect()->route('events.index')->with('success', 'Evenement updated successfully.');
}




    public function supprimer(Event $event)
{
    $event->delete();
    return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
}



}
