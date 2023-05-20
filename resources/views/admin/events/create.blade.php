@extends('layouts.app')

@section('content')
    <div class="container col-lg-9" style="margin-top:130px;margin-bottom:130px;">
        <div class="text-center">
            <h1>Evenement toevoegen</h1>
        </div>

        <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data" novalidate>
            @csrf

            <div class="form-group">
                <label for="title">Titel</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="title">Locatie</label>
                <input type="text" name="locatie" id="locatie" class="form-control @error('locatie') is-invalid @enderror"
                    required>
                @error('locatie')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Beschrijving</label>
                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                    rows="5" required></textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="date">Datum</label>
                <input type="date" name="date" id="date" class="form-control" required>
                @error('date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
