<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('date', '>=', now()->startOfDay())
            ->orderByRaw("CASE WHEN date < CURDATE() THEN 1 ELSE 0 END, date ASC")
            ->paginate(2);
        $no_events_text = $events->isEmpty() ? "Er zijn op dit moment geen geplande evenementen." : null;

        $events->transform(function ($event) {
            $event->formatted_date = ucfirst(Carbon::parse($event->date)->locale('nl')->isoFormat('D MMMM'));
            return $event;
        });

        $news = News::orderBy('created_at', 'desc')->paginate(3);
        $no_news_text = $news->isEmpty() ? "Er zijn op dit moment geen nieuwsberichten." : null;

        $news->transform(function ($news) {
            $news->formatted_date = ucfirst(Carbon::parse($news->created_at)->locale('nl')->isoFormat('D MMMM'));
            return $news;
        });

        return view('pages.welcome', compact('events', 'no_events_text', 'news', 'no_news_text'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'locatie' => 'required',
            'description' => 'required',
            'date' => 'required|date'
        ], [
                'title.required' => 'De titel van het evenement is verplicht.',
                'locatie.required' => 'De locatie van het evenement is verplicht.',
                'date.required' => 'De datum van het evenement is verplicht.',
                'description.required' => 'Het evenement zijn biografie is verplicht.',
                'date.date' => 'De datum moet in het juiste formaat zijn.'
            ]);

        // Creëer een nieuwe instantie van het Event-model en vul de gegevens in
        $event = new Event();
        $event->title = $request->input('title');
        $event->locatie = $request->input('locatie');
        $event->description = $request->input('description');
        $event->date = $request->input('date');
        $event->slug = Str::slug($request->input('title') . ' ' . $request->input('locatie')); // genereer de slug

        // Sla het evenement op in de database
        $event->save();

        return redirect()->route('pages.events.index')->with('success', 'Evenement is toegevoegd.');
    }

    public function show($slug)
    {
        // Zoek het nieuwsartikel op basis van de slug
        $event = Event::where('slug', $slug)->firstOrFail();

        // Geef de nieuws-pagina weer, inclusief de originele titel
        return view('pages.events.show', ['news' => $event, 'originalTitle' => $event->title]);
    }

    public function filter(Request $request)
    {
        $filter = $request->input('filter');

        $query = Event::query();

        if (is_array($filter) && in_array('upcoming', $filter)) {
            $query->where('date', '>=', now());
        }

        if (is_array($filter) && in_array('past', $filter)) {
            $query->where('date', '<', now());
        }

        $events = $query->orderByRaw("CASE WHEN date < CURDATE() THEN 1 ELSE 0 END, date ASC")
            ->paginate(5);

        // Voeg de filterwaarde toe aan de pagineringlinks
        $events->appends(['filter' => $filter]);

        return view('pages.events.index', compact('events', 'filter'));
    }




}