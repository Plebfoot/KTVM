@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top:130px;margin-bottom:130px;">
        <div class="text-center">
            <h1>Nieuwsitem toevoegen</h1>
        </div>

        <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data" novalidate>
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
                <label for="description">Beschrijving</label>
                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                    rows="5" required></textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Afbeelding</label>
                <input type="file" name="image" id="image"
                    class="form-control-file @error('image') is-invalid @enderror" onchange="previewImage()">
                <img id="imagePreview" src="" alt="" style="max-width: 200px; margin-top: 10px;">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div id="preview" class="mt-3" style="display: none;">
                <h5>Preview:</h5>
                <div id="image-preview"></div>
                <p id="description-preview"></p>
            </div>

            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
