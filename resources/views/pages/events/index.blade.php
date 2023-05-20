@extends('layouts.layout')

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

@section('content')
    <div class="container text-center py-5 ">
        <div class="p-5 mb-2 lc-block">
            <div class="lc-block mb-4">
                <div editable="rich">
                    <h4 class="fw-bold display-4">KTVM</h4>
                    <h3 class="fw-bold display-4">Concertagenda</h3>
                </div>
            </div>
            <div class="lc-block mb-5">
                <div editable="rich">
                    <p class="lead">De KTVM Concertagenda is een innovatieve en uitgebreide bron voor liefhebbers van live
                        muziek.</p>
                </div>
            </div>
        </div>

    </div>


    <form id="filter-form" action="{{ url('/concertagenda') }}" method="GET">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="d-flex justify-content-center">
                    <div>
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" id="upcoming-events" name="filter[]"
                                value="upcoming">
                            <label class="form-check-label ml-2" for="upcoming-events">Aankomende evenementen</label>
                        </div><Br>
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" id="past-events" name="filter[]" value="past">
                            <label class="form-check-label ml-2" for="past-events">Geweeste evenementen</label>
                        </div>
                    </div>
                    <div class="ml-4">
                        <button type="submit" class="btn btn-primary">Filteren</button>
                        <button type="submit" href="/concertagenda" class="btn btn-primary">Wis filters</button>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <hr>
            </div>
        </div>
    </form>

    <div class="container">
        <div class="event-list">
            @foreach ($events as $event)
                <div class="card custom-card">
                    <div class="card-body d-flex align-items-center">
                        <div class="calendar">
                            <span class="calendar-day">{{ date('d', strtotime($event->date)) }}</span>
                            <span class="calendar-month">{{ date('M', strtotime($event->date)) }}</span>
                        </div>
                        <div class="event-details">
                            <h3>{{ $event->title }}</h3>
                            <p class="event-location">Locatie: {{ $event->locatie }}</p>
                        </div>
                        <div class="ml-auto">
                            <a href="{{ route('event.show', $event->slug) }}"
                                class="btn {{ $event->date < date('Y-m-d') ? ' btn-disabled ' : ' btn-primary' }}">Bekijk
                                meer</a>
                        </div>
                    </div>
                </div>
            @endforeach

            @if ($events->hasPages())
            <div class="text-center">
                @if ($events->currentPage() > 1)
                    <a href="{{ $events->appends(['filter' => $filter])->previousPageUrl() }}" class="btn btn-primary">Terug naar eerste pagina</a>
                @endif
        
                @if ($events->hasMorePages())
                    <a href="{{ $events->appends(['filter' => $filter])->nextPageUrl() }}" class="btn btn-primary">Laad meer</a>
                @endif
            </div>
        @endif
        </div>
    </div>
@endsection
