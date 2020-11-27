<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function show(Request $request, Event $event)
    {
        return $event;
    }

    public function index()
    {
        $feeds = Event::latest()->paginate(10);
        return view('admin.feeds.index', compact('feeds'));
    }

    public function create()
    {
        return view('admin.feeds.create');
    }

    public function store(Request $request)
    {
        $feed = new Event;
        $feed->title = $request->title;
        $feed->links = $request->links;
        $feed->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $feed = Event::findOrFail($id);
        $feed->delete();

        return redirect()->back();
    }


}
