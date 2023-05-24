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

    public function create()
    {
        // Logica om het formulier voor het aanmaken van een nieuw bestuurslid weer te geven
    }

    public function store(Request $request)
    {
        // Logica om een nieuw bestuurslid op te slaan in de database
    }

    public function show(Bestuur $bestuur)
    {
        // Logica om een specifiek bestuurslid weer te geven
    }

    public function edit(Bestuur $bestuur)
    {
        // Logica om het formulier voor het bewerken van een bestuurslid weer te geven
    }

    public function update(Request $request, Bestuur $bestuur)
    {
        // Logica om een bestuurslid bij te werken in de database
    }

    public function destroy(Bestuur $bestuur)
    {
        // Logica om een bestuurslid te verwijderen uit de database
    }
}