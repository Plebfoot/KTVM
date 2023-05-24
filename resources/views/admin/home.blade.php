@extends('layouts.app')

<head>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

@section('content')
    <h1 class="mt-4">Welkom {{ Auth::user()->name }}</h1>
    <div class="container p-0">
        <h1 class="h3 mb-3">Blank Page</h1>

        <div class="row">
            <div class="col-8">
                <div class="card-no-hover">
                    <div class="container">
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    @if (session('success'))
                                        <div class="alert alert-success fade-out">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h2>Nieuws<b>berichten</b></h2>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="/nieuws/create">
                                                <button type="button" class="btn btn-primary add-new"><i
                                                        class="fa fa-plus"></i>Voeg nieuwe</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Naam</th>
                                            <th>Titel</th>
                                            <th>Datum</th>
                                            <th>Link</th>
                                            <th>Acties</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($news as $item)
                                            <tr>
                                                <td>{{ $item->user }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->formatted_date }}</td>
                                                <td><a href="/nieuws/{{ $item->slug }}" target="_blank">Bekijk</a>
                                                </td>
                                                <td>
                                                    <a class="edit" title="Edit" data-toggle="modal"
                                                        data-target="#editModal{{ $item->id }}">
                                                        <i class="material-icons">&#xE254;</i>
                                                    </a>

                                                    <button type="button" class="delete-button" title="Delete"
                                                        data-toggle="modal" data-target="#deleteModal{{ $item->id }}">
                                                        <i class="material-icons">&#xE872;</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                @foreach ($news as $item)
                                    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel{{ $item->id }}">
                                                        Bewerk
                                                        nieuwsbericht</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('news.update', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">User</label>
                                                                <input type="text" disabled class="form-control"
                                                                    id="title" name="title"
                                                                    value="{{ $item->user }}">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputPassword4">URL</label>
                                                                <input type="text" disabled class="form-control"
                                                                    id="title" name="title"
                                                                    value="/nieuws/{{ $item->slug }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">Titel</label>
                                                            <input type="text" class="form-control" id="title"
                                                                name="title" value="{{ $item->title }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="content">Inhoud</label>
                                                            <textarea class="form-control" id="content" name="content">{{ $item->description }}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="image">Afbeelding</label>
                                                            <input type="file" class="form-control-file" id="image"
                                                                name="image">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Opslaan</button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Annuleren</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="deleteModalLabel{{ $item->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog  modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">
                                                        Verwijderen bevestigen</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Weet je zeker dat je dit nieuwsbericht wilt verwijderen?</p>
                                                    <h4>{{ $item->title }}</h4> <br>
                                                    <span>{{ nl2br(e($item->description)) }}</span>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Annuleren</button>
                                                    <form action="{{ route('news.destroy', $item->id) }}" method="POST"
                                                        style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Verwijderen</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {!! $news->links('pagination::simple-bootstrap-4') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-8">
                <div class="card-no-hover">
                    <div class="container">
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    @if (session('success'))
                                        <div class="alert alert-success fade-out">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h2>Nieuws<b>berichten</b></h2>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="/nieuws/create">
                                                <button type="button" class="btn btn-primary add-new"><i
                                                        class="fa fa-plus"></i>Voeg nieuwe</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Naam</th>
                                            <th>Titel</th>
                                            <th>Datum</th>
                                            <th>Link</th>
                                            <th>Acties</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($news as $item)
                                            <tr>
                                                <td>{{ $item->user }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->formatted_date }}</td>
                                                <td><a href="/nieuws/{{ $item->slug }}" target="_blank">Bekijk</a>
                                                </td>
                                                <td>
                                                    <a class="edit" title="Edit" data-toggle="modal"
                                                        data-target="#editModal{{ $item->id }}">
                                                        <i class="material-icons">&#xE254;</i>
                                                    </a>

                                                    <button type="button" class="delete-button" title="Delete"
                                                        data-toggle="modal" data-target="#deleteModal{{ $item->id }}">
                                                        <i class="material-icons">&#xE872;</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                @foreach ($news as $item)
                                    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel{{ $item->id }}">
                                                        Bewerk
                                                        nieuwsbericht</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('news.update', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">User</label>
                                                                <input type="text" disabled class="form-control"
                                                                    id="title" name="title"
                                                                    value="{{ $item->user }}">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputPassword4">URL</label>
                                                                <input type="text" disabled class="form-control"
                                                                    id="title" name="title"
                                                                    value="/nieuws/{{ $item->slug }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">Titel</label>
                                                            <input type="text" class="form-control" id="title"
                                                                name="title" value="{{ $item->title }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="content">Inhoud</label>
                                                            <textarea class="form-control" id="content" name="content">{{ $item->description }}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="image">Afbeelding</label>
                                                            <input type="file" class="form-control-file" id="image"
                                                                name="image">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Opslaan</button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Annuleren</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="deleteModalLabel{{ $item->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog  modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">
                                                        Verwijderen bevestigen</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Weet je zeker dat je dit nieuwsbericht wilt verwijderen?</p>
                                                    <h4>{{ $item->title }}</h4> <br>
                                                    <span>{{ nl2br(e($item->description)) }}</span>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Annuleren</button>
                                                    <form action="{{ route('news.destroy', $item->id) }}" method="POST"
                                                        style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Verwijderen</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {!! $news->links('pagination::simple-bootstrap-4') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       
       
    </div>
     {{-- 
    <div class="col-lg-6 mb-4 order-0">
        <div class="card card-no-hover">
            <div class="card-body">
                <div class="container-lg">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                @if (session('success'))
                                    <div class="alert alert-success fade-out">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2>Nieuws<b>berichten</b></h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="/nieuws/create">
                                            <button type="button" class="btn btn-primary add-new"><i
                                                    class="fa fa-plus"></i>Voeg nieuwe</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Naam</th>
                                        <th>Titel</th>
                                        <th>Datum</th>
                                        <th>Link</th>
                                        <th>Acties</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($news as $item)
                                        <tr>
                                            <td>{{ $item->user }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->formatted_date }}</td>
                                            <td><a href="/nieuws/{{ $item->slug }}" target="_blank">Bekijk</a></td>
                                            <td>
                                                <a class="edit" title="Edit" data-toggle="modal"
                                                    data-target="#editModal{{ $item->id }}">
                                                    <i class="material-icons">&#xE254;</i>
                                                </a>

                                                <button type="button" class="delete-button" title="Delete"
                                                    data-toggle="modal" data-target="#deleteModal{{ $item->id }}">
                                                    <i class="material-icons">&#xE872;</i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            @foreach ($news as $item)
                                <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Bewerk
                                                    nieuwsbericht</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('news.update', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputEmail4">User</label>
                                                            <input type="text" disabled class="form-control"
                                                                id="title" name="title" value="{{ $item->user }}">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="inputPassword4">URL</label>
                                                            <input type="text" disabled class="form-control"
                                                                id="title" name="title"
                                                                value="/nieuws/{{ $item->slug }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title">Titel</label>
                                                        <input type="text" class="form-control" id="title"
                                                            name="title" value="{{ $item->title }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="content">Inhoud</label>
                                                        <textarea class="form-control" id="content" name="content">{{ $item->description }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="image">Afbeelding</label>
                                                        <input type="file" class="form-control-file" id="image"
                                                            name="image">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Opslaan</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Annuleren</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">
                                                    Verwijderen bevestigen</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Weet je zeker dat je dit nieuwsbericht wilt verwijderen?</p>
                                                <h4>{{ $item->title }}</h4> <br>
                                                <span>{{ nl2br(e($item->description)) }}</span>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Annuleren</button>
                                                <form action="{{ route('news.destroy', $item->id) }}" method="POST"
                                                    style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Verwijderen</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {!! $news->links('pagination::simple-bootstrap-4') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
