@extends('layouts.app')

<head>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

@section('content')
    <div class="card card-no-hover" style="margin-top:240px;">
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
                                    <h2>Bestuurs<b>leden</b></h2>
                                </div>
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary add-new" data-toggle="modal"
                                        data-target="#addModal"><i class="fa fa-plus"></i>Voeg nieuwe</button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Naam</th>
                                    <th>Rol</th>
                                    <th>Email</th>
                                    <th>Acties</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bestuursleden as $bestuurslid)
                                    <tr>
                                        <td>{{ $bestuurslid->voornaam }} {{ $bestuurslid->achternaam }}</td>
                                        <td>{{ $bestuurslid->rol }}</td>
                                        <td>{{ $bestuurslid->email }}</td>
                                        <td>
                                            <a class="edit" title="Edit" data-toggle="modal"
                                                data-target="#editModal{{ $bestuurslid->id }}">
                                                <i class="material-icons">&#xE254;</i>
                                            </a>

                                            <button type="button" class="delete-button" title="Delete" data-toggle="modal"
                                                data-target="#deleteModal{{ $bestuurslid->id }}">
                                                <i class="material-icons">&#xE872;</i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addModalLabel">
                                            Voeg een nieuwe bestuurslid toe.</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('bestuur.store') }}"
                                            enctype="multipart/form-data" novalidate>
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    @error('voornaam')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                    <label for="inputPassword4">Voornaam</label>
                                                    <input type="text" class="form-control" id="voornaam"
                                                        name="voornaam" placeholder="Voornaam">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    @error('achternaam')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                    <label for="inputPassword4">Achternaam</label>
                                                    <input type="text" class="form-control" id="achternaam"
                                                        name="achternaam" placeholder="Achternaam">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    @error('email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                    <label for="title">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        placeholder="Email">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    @error('rol')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                    <label for="title">Rol</label>
                                                    <input type="rol" class="form-control" id="rol" name="rol"
                                                        placeholder="Rol b.v Penningmeester">
                                                </div>
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


                        @foreach ($bestuursleden as $bestuurslid)
                            <div class="modal fade" id="editModal{{ $bestuurslid->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="editModalLabel{{ $bestuurslid->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel{{ $bestuurslid->id }}">
                                                Bewerk
                                                {{ $bestuurslid->voornaam }} {{ $bestuurslid->achternaam }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('bestuur.update', $bestuurslid->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Voornaam</label>
                                                        <input type="text" class="form-control" id="voornaam"
                                                            name="voornaam" value="{{ $bestuurslid->voornaam }}">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Achternaam</label>
                                                        <input type="text" class="form-control" id="achternaam"
                                                            name="achternaam" value="{{ $bestuurslid->achternaam }}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="title">Email</label>
                                                    <input type="email" class="form-control" id="email"
                                                        name="email" value="{{ $bestuurslid->email }}">
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

                            <div class="modal fade" id="deleteModal{{ $bestuurslid->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="deleteModalLabel{{ $bestuurslid->id }}"
                                aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $bestuurslid->id }}">
                                                Verwijderen bevestigen</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Weet je zeker dat je dit nieuwsbericht wilt verwijderen?</p>
                                            <h4>{{ $bestuurslid->voornaam }}</h4> <br>
                                            <span>{{ nl2br(e($bestuurslid->email)) }}</span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Annuleren</button>
                                            <form action="{{ route('bestuur.destroy', $bestuurslid->id) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Verwijderen</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    // Voorkom dat de modal sluit bij validatiefouten
    document.addEventListener('DOMContentLoaded', function() {
        var addModal = document.getElementById('addModal');
        addModal.addEventListener('hide.bs.modal', function(event) {
            if (document.querySelector('.modal.show')) {
                event.preventDefault();
                event.stopPropagation();
                addModal.classList.add('show');
            }
        });
    });
</script>
