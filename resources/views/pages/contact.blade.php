@extends('layouts.layout')

<head>
    <title>KTVM - Contact</title>
</head>

@section('content')
    <div class="form" style="max-width: 60vw; margin: auto;">
        <form id='oproepForm' method="POST" action="{{ route('contact.store') }}" novalidate>
            @csrf
            <div id="text" style="margin:auto;padding-top: 50px; margin-bottom:50px;">
                @if (session('success'))
                <div class="alert alert-success fade-out">
                    {{ session('success') }}
                </div>
            @endif
                <h1 style="text-align:center;">Heeft u een vraag?</h1>
                <hr>
                <p style="text-align:center;">We willen graag jouw feedback en input ontvangen, en we staan klaar om je te helpen bij het maken van boekingen en het beantwoorden van eventuele vragen.</p>
            </div>

            <div class="form-row text-left" style="display:block">
                <h4>Contactpersoon gegevens</h4>
                <small id="persoonsInfoHelp" class="form-text text-muted">We zullen uw gegevens nooit met iemand anders
                    delen.</small>
                <hr>
            </div>
            <div class="form-row" style="margin-bottom:100px">
                <div class="form-group col-md-4">
                    <label for="contact_name">Naam contactpersoon: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('contact_name') is-invalid @enderror" id="contact_name"
                        name="contact_name" value="{{ old('contact_name') }}" required>
                    @error('contact_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-2">
                    <label for="contact_infix">Tussenvoegsel:</label>
                    <input type="text" class="form-control @error('contact_infix') is-invalid @enderror"
                        id="contact_infix" name="contact_infix" value="{{ old('contact_infix') }}">
                    @error('contact_infix')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="contact_lastname">Achternaam: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('contact_lastname') is-invalid @enderror"
                        id="contact_lastname" name="contact_lastname" value="{{ old('contact_lastname') }}">
                    @error('contact_lastname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="contact_email">Email contactpersoon: <span class="text-danger">*</span></label>
                    <input type="email" class="form-control @error('contact_email') is-invalid @enderror"
                        id="contact_email" name="contact_email" value="{{ old('contact_email') }}" required>
                    @error('contact_email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="contact_phone">Telefoonnummer: <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control @error('contact_phone') is-invalid @enderror"
                        id="contact_phone" name="contact_phone" value="{{ old('contact_phone') }}" required>
                    @error('contact_phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row text-left" style="display:block">
                <h4>Andere gegevens</h4>
                <hr>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="comments">Opmerkingen: <span class="text-danger">*</span></label>
                    <textarea rows='5' class="form-control @error('comments') is-invalid @enderror" id="comments" name="comments"
                        placeholder="Omschrijf je vraag/opmerking en of boeking. Wat zijn de tijden? Welke benodigdheden heb je nodig?">{{ old('comments') }}</textarea>
                    @error('comments')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="occasion">Gelegenheid: <span class="text-danger">*</span></label>
                    <select class="form-control @error('occasion') is-invalid @enderror" id="occasion" name="occasion" required>
                        <option value="" selected disabled>Kies een gelegenheid</option>
                        <option value="Oproep" {{ old('occasion') == 'Oproep' ? 'selected' : '' }}>Oproep</option>
                        <option value="Vraag" {{ old('occasion') == 'Vraag' ? 'selected' : '' }}>Vraag</option>
                        <option value="Boeking" {{ old('occasion') == 'Boeking' ? 'selected' : '' }}>Boeking</option>
                    </select>
                    @error('occasion')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-top:15px">Verzenden</button>
                    <br>
                    <p style="font-size: 14px;">Door te verzenden ga je akkoord met de <a href="#">algemene voorwaarden</a>.
                    </p>
                </div>
            </div>
        </form>
    </div>

    {{-- 
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
    </div> --}}
@endsection
