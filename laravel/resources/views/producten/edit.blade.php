@extends('layouts.app', ['activePage' => 'producten'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Product {{ $producten->naam }} aanpassen</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('producten.update', $producten->id) }}" method="POST" enctype="multipart/form-data" role="form">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Naam:</strong>
                                            <input type="text" name="naam" class="form-control" value="{{$producten->naam}}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Beschrijving:</strong>
                                            <input type="text" name="beschrijving" class="form-control" value="{{$producten->beschrijving}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Categorie:</strong>
                                            <select name="categorie" class="custom-select">
                                                <option value="" disabled selected>--- {{__('Kies een categorie')}} ---</option>
                                                <option value="snacks" {{$producten->categorie == "snacks"  ? 'selected' : ''}}>Snacks</option>
                                                <option value="salads" {{$producten->categorie == "salads"  ? 'selected' : ''}}>Salads</option>
                                                <option value="toasts" {{$producten->categorie == "toasts"  ? 'selected' : ''}}>Toasts</option>
                                                <option value="sandwiches" {{$producten->categorie == "sandwiches"  ? 'selected' : ''}}>Sandwiches</option>
                                                <option value="bagels" {{$producten->categorie == "bagels"  ? 'selected' : ''}}>Bagels</option>
                                                <option value="theRoof" {{$producten->categorie == "theRoof"  ? 'selected' : ''}}>The Roof</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Prijs:</strong>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">EUR</span>
                                                </div>
                                                <input type="number" class="form-control" id="price" name="prijs" min="0.00" step="0.05" value="{{ number_format($producten->prijs, 2) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Locatie</strong>
                                            <select class="custom-select" name="locatie" required>
                                                <option value="" disabled selected>--- {{__('Kies een locatie')}} ---</option>
                                                <option value="binnentuin" {{$producten->locatie == "binnentuin"  ? 'selected' : ''}}>Binnentuin</option>
                                                <option value="The Roof" {{$producten->locatie == "The Roof"  ? 'selected' : ''}}>The Roof</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 text-center">
                                        <a class="btn btn-primary" href="{{ route('producten.index') }}">Terug naar overzicht</a>
                                        <button type="submit" class="btn btn-success">Opslaan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script type="text/javascript">
        $(document).ready(function () {
            $("#price").change(function() {
                $(this).val(parseFloat($(this).val()).toFixed(2));
            });
        });
    </script> --}}
@endsection