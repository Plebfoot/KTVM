<?php

namespace App\Http\Controllers;

use App\Models\Bestuur;
use Illuminate\Http\Request;

class BestuurController extends Controller
{
    public function index()
    {
        $bestuursleden = Bestuur::all();
        return view('about.het-bestuur', compact('bestuursleden'));
    }

    public function all()
    {
        $bestuursleden = Bestuur::all();
        return view('admin.edit-pages.edit-bestuur', compact('bestuursleden'));
    }

    public function create(Request $request)
    {


    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'voornaam' => 'required',
            'achternaam' => 'required',
            'rol' => 'required',
            'email' => 'required|email',
            'image' => 'required|image',
        ], [
                'voornaam.required' => 'Voer een voornaam in voor een nieuw bestuurslid.',
                'achternaam.required' => 'Achternaam is verplicht voor een nieuw bestuurslid.',
                'email.required' => 'Email adress is verplicht voor een nieuw bestuurslid.',
                'rol.required' => 'Bestuurdslid moet een rol hebben.',
                'email.email' => 'Het ingevoerde e-mailadres is ongeldig.',
                'image.required' => 'Een afbeelding is vereist voor een nieuw bestuurslid.',
                'image.image' => 'Het geüploade bestand moet een afbeelding zijn.',
            ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/bestuur', $filename);
            $validatedData['image'] = $filename;
        }

        // Maak een nieuwe FormEntry instantie met de gevalideerde data en sla deze op in de database
        $formEntry = new Bestuur($validatedData);


        $formEntry->save();
        // Redirect naar de bedanktpagina
        return redirect()->back()->with('success', 'Nieuw bestuurslid is toegevoegd.');
    }

    public function show(Bestuur $bestuur)
    {
        // Logica om een specifiek bestuurslid weer te geven
    }

    public function edit(Bestuur $bestuur)
    {
        // Logica om het formulier voor het bewerken van een bestuurslid weer te geven
    }

    public function update(Request $request, $id)
    {
        $bestuurslid = Bestuur::findOrFail($id);

        $bestuurslid->voornaam = $request->input('voornaam');
        $bestuurslid->achternaam = $request->input('achternaam');
        $bestuurslid->email = $request->input('email');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/bestuur', $filename);
            $bestuurslid->image = $filename;
        }

        $message = $bestuurslid->voornaam . ' ' . $bestuurslid->achternaam . ' is succesvol gewijzigd.';


        $bestuurslid->save();

        return redirect()->back()->with('success', $message);
    }

    public function destroy($id)
    {
        $bestuursleden = Bestuur::findOrFail($id);
        $bestuursleden->delete();

        $message = $bestuursleden->voornaam . ' ' . $bestuursleden->achternaam . ' is succesvol verwijderd.';

        return redirect()->back()->with('success', $message);
    }
}