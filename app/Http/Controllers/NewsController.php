<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        return view('pages.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'images.*' => 'image|max:2048|required', //max 2MB
        ], [
                'title.required' => 'De titel is verplicht.',
                'description.required' => 'De beschrijving is verplicht.',
                'images.*.image' => 'Het bestand moet een afbeelding zijn.',
                'images.*.required' => 'Het nieuwsbericht moet een afbeelding bevatten.',
                'images.*.max' => 'Het bestand mag niet groter zijn dan 2MB.',
            ]);

        $images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = uniqid() . '_' . $image->getClientOriginalName();
                $path = $image->storeAs('public/news', $filename);
                $images[] = $path;
            }
        }

        $news = News::create([
            'title' => $validatedData['title'],
            'slug' => Str::slug($validatedData['title']),
            'user' => Auth::user()->name,
            'description' => $validatedData['description'],
            'images' => $images,
        ]);


        return redirect()->route('pages.news.index')->with('success', 'Nieuwsbericht is toegevoegd.');
    }


    public function show($slug)
    {
        // Zoek het nieuwsartikel op basis van de slug
        $news = News::where('slug', $slug)->firstOrFail();

        // Geef de nieuws-pagina weer, inclusief de originele titel
        return view('pages.news.show', ['news' => $news, 'originalTitle' => $news->title]);
    }
}