<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('date', '>=', now()->format('Y-m-d'))->paginate(4);

        if ($events->isEmpty()) {
            $no_events_text = "Er zijn op dit moment geen geplande evenementen.";
        } else {
            $no_events_text = null;
        }

        $events = $events->map(function ($event) {
            $event->formatted_date = Carbon::parse($event->date)->locale('nl')->isoFormat('D MMMM');
            $event->formatted_date = ucfirst($event->formatted_date);
            return $event;
        });

        $news = News::orderBy('created_at', 'desc')->paginate(3);

        $news = $news->map(function ($news) {
            $news->formatted_date = Carbon::parse($news->created_at)->locale('nl')->isoFormat('D MMMM');
            $news->formatted_date = ucfirst($news->formatted_date);
            return $news;
        });

        if ($news->isEmpty()) {
            $no_news_text = "Er zijn op dit moment geen nieuwsberichten.";
        } else {
            $no_news_text = null;
        }

        return view('pages.welcome', compact('events', 'no_events_text', 'news', 'no_news_text'));
    }
}