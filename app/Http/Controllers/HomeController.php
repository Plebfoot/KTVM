<?php

namespace App\Http\Controllers;

use App\Models\Bestuur;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::paginate(5);
        $news->transform(function ($news) {
            $news->formatted_date = ucfirst(Carbon::parse($news->created_at)->locale('nl')->isoFormat('D MMMM'));
            return $news;
        });
        return view('admin.home', compact('news'));
    }
}