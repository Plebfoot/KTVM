<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
   


    public function store(Request $request)
    {
        // Valideer de input data van het request
        $validatedData = $request->validate([
            'occasion' => 'required',
            'comments' => 'max:500|required',
            'contact_infix' => 'nullable|max:6',
            'contact_name' => 'required',
            'contact_lastname' => 'required',
            'contact_email' => 'required|email',
            'contact_phone' => 'required',
        ], [
                'occasion.required' => 'Kies een Optie',
                'comments.required' => 'Voer een opmerking in.',
                'comments.max' => 'Je opmerking mag maximaal 500 tekens bevatten.',
                'contact_infix.max' => 'Lengte van het tussenvoegsel moet maximaal 6 tekens bevatten.',
                'contact_name.required' => 'Voer een naam in',
                'contact_lastname.required' => 'Voer een achternaam in',
                'contact_email.required' => 'Voer een e-mailadres in',
                'contact_email.email' => 'Voer een geldig e-mailadres in',
                'contact_phone.required' => 'Voer een telefoonnummer in',
            ]);

        // Maak een nieuwe FormEntry instantie met de gevalideerde data en sla deze op in de database
        $formEntry = new ContactForm($validatedData);

        $formEntry->save();
        // Redirect naar de bedanktpagina
        return redirect()->route('pages.contact')->with('success', 'Wij nemen zo spoedig mogelijk contact met u op.');

    }
}
