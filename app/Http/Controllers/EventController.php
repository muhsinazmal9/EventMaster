<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $events = Event::get(['id', 'title', 'description', 'date', 'location']);
        return view('frontend.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }

    public function handleAjaxRequest(Request $request)
    {
        $eventData = [
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end,
        ];

        switch ($request->type) {
            case 'add':
                $event = Event::create($eventData);
                $message = 'Event added successfully';
                break;

            case 'update':
                $event = Event::find($request->id)->update($eventData);
                $message = 'Event updated successfully';
                break;

            case 'delete':
                Event::destroy($request->id);
                $event = null;
                $message = 'Event deleted successfully';
                break;

            default:
                return error('Invalid request type', status: 400);
        }

        return success($message, $event);
    }

}
