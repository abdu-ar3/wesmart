<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = \App\Models\Event::paginate(10);
        return view('events.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi
        \Validator::make($request->all(), [
            "name" => "required|min:5|max:20",
            "tanggal" => "required|min:5",
            "deskripsi" => "required|min:4",
        ])->validate();

        // New Events
        $new_events = new \App\Models\Event;

        $new_events->name = $request->get('name');
        $new_events->tanggal = $request->get('tanggal');
        $new_events->deskripsi = $request->get('deskripsi');

        if ($request->file('avatar')) {
            $file = $request->file('avatar')->store('/frontend/images/scholarship', 'public');
            $new_events->avatar = $file;
        }

        $new_events->save();
        return redirect()->route('event.create')->with('status', 'Events
       successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = \App\Models\Event::findOrFail($id);
        return view('events.edit', ['event' => $events]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = \App\Models\Event::findOrFail($id);

        $event->name = $request->get('name');
        $event->tanggal = $request->get('tanggal');
        $event->deskripsi = $request->get('deskripsi');

        if ($request->file('avatar')) {
            if ($event->avatar && file_exists(storage_path('app/public/' .
                $event->avatar))) {
                \Storage::delete('public/' . $event->avatar);
            }
            $file = $request->file('avatar')->store('avatars', 'public');
            $event->avatar = $file;
        }

        $event->save();
        return redirect()->route('event.index', [$id])->with('status', 'Event succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = \App\Models\Event::findOrFail($id);
        $event->delete();
        return redirect()->route('event.index')->with('status', 'Event successfully deleted');
    }
}
