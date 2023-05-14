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
        $events = Event::where('date', '>=', now()->format('Y-m-d'))->paginate(2);
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

}