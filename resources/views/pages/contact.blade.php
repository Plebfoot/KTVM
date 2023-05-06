@extends('layouts.layout')

<head>
    <title>KTVM - Contact</title>
</head>
@section('content')
    <div class="form">
        <form id="oproepForm" method="POST" action="#" novalidate="">
            @csrf
            <div id="text" style="margin:auto;padding-top: 50px; margin-bottom:50px;">
                <h1 style="text-align:center;">Heeft u een vraag?</h1>
                <p style="text-align:center;">Ook voor boekingen &amp; opmerkingen!</p>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="contact_name">Naam contactpersoon: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="contact_name" name="contact_name" value=""
                        required="">
                </div>
                <div class="form-group col-md-2">
                    <label for="contact_infix">Tussenvoegsel:</label>
                    <input type="text" class="form-control" id="contact_infix" name="contact_infix" value="">
                </div>
                <div class="form-group col-md-4">
                    <label for="contact_lastname">Achternaam: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="contact_lastname" name="contact_lastname" value="">
                </div>
                <div class="form-group col-md-6">
                    <label for="contact_email">Email contactpersoon: <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="contact_email" name="contact_email" value=""
                        required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="occasion">Type: <span class="text-danger">*</span></label>
                    <select class="form-control" id="occasion" name="occasion" required="">
                        <option value="" selected="" disabled="">Kies een optie</option>
                        <option value="Vraag">Vraag</option>
                        <option value="Opmerking">Opmerking</option>
                        <option value="Boeking">Boeking</option>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="comments">Opmerkingen: <span class="text-danger">*</span></label>
                    <textarea rows="5" class="form-control" id="comments" name="comments" placeholder="Omschrijf hier uw bericht"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Verzenden</button>
                </div>
                <div class="form-group col-md-6" style="text-align: right;">
                    <p style="font-size: 14px;">Door te verzenden ga je akkoord met de <a href="#">algemene
                            voorwaarden</a>.</p>
                </div>
            </div>
        </form>
        <div class="form-items">
            <div>
                <h4>Locatie:</h4>
                <blockquote>
                    <p>
                        <b>Repetitiegebouw KTVM<br>
                        </b>Bevrijdingslaan 6a<br>
                        4001 HZ Tiel<br>
                        06 52 61 46 03
                    </p>
                    <p>Loop eens binnen op een&nbsp;repetitieavond!
                    </p>
                </blockquote>

            </div>
            <div>
                <h4>Repetities:</h4>
                <p>
                    <b>Harmonieorkest:</b>&nbsp;elke dinsdagavond van 19:30 tot 22:00<b><br>
                    </b><strong>De Opmaat:</strong> elke dinsdagavond van 18:00 tot 19:00<strong><br>
                        De BBK:&nbsp;</strong>om de week op donderdagavond van 20:00 tot 22:00
                </p>
            </div>
            <div>
                <h4>Contactgegevens:</h4>
                <blockquote>
                    <p>
                        <strong>Financiën:</strong><a style="font-size:15px"href="mailto:penningmeester@ktvm.nl ">
                            penningmeester@ktvm.nl </a><br>
                        <strong>BBK:</strong><a href="mailto:bbk@ktvm.nl"> bbk@ktvm.nl</a><br>
                        <strong>Webmaster:</strong><a href="mailto:webmaster@ktvm.nl"> webmaster@ktvm.nl</a><br>
                    </p>
                </blockquote>
            </div>
        </div>
    </div>
@endsection
