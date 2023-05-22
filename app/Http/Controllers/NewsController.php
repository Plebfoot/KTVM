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
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|max:2048|required' //max 2MB
        ], [
                'title.required' => 'De titel is verplicht.',
                'description.required' => 'De beschrijving is verplicht.',
                'image.image' => 'Het bestand moet een afbeelding zijn.',
                'image.required' => 'Het nieuwsbericht moet een afbeelding bevatten.',
                'image.max' => 'Het bestand mag niet groter zijn dan 2MB.',
            ]);

        $news = new News();
        $news->title = $request->input('title');
        $news->slug = Str::slug($request->input('title')); // genereer de slug
        $news->user = Auth::user()->name;
        $news->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/news', $filename);
            $news->image = $filename;
        }

        $news->save();

        return redirect()->route('home')->with('success', 'Nieuwsbericht is toegevoegd.');
    }

    public function show($slug)
    {
        // Zoek het nieuwsartikel op basis van de slug
        $news = News::where('slug', $slug)->firstOrFail();

        // Geef de nieuws-pagina weer, inclusief de originele titel
        return view('pages.news.show', ['news' => $news, 'originalTitle' => $news->title]);
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        // Optionally, add a success message

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
    
        $news->title = $request->input('title');
        $news->slug = Str::slug($request->input('title'));
        
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/news', $filename);
            $news->image = $filename;
        }
    
        if ($request->has('content')) {
            $news->description = $request->input('content');
        }

    
        $news->save();
    
        return redirect()->route('home')->with('success', 'Nieuwsbericht is bijgewerkt.');
    }
}