@extends('layouts.app', ['activePage' => 'producten', 'titlePage' => __('Producten')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Producten</h4>
                            <p class="card-category">In deze tabel vind u een overzicht van alle producten.</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <button type="button" data-toggle="modal" data-target="#productToevoegen" class="btn btn-sm btn-primary">{{__('Nieuw product aanmaken')}}</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>ID</th>
                                        <th>Naam</th>
                                        <th>Beschrijving</th>
                                        <th>Categorie</th>
                                        <th>Locatie</th>
                                        <th>Prijs</th>
                                        <th>Acties</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($producten as $product)
                                            <tr>
                                                <td>{{$product->id}}</td>
                                                <td>{{$product->naam}}</td>
                                                <td>{{$product->beschrijving}}</td>
                                                <td>{{$product->categorie}}</td>
                                                <td>{{$product->locatie}}</td>
                                                <td>€{{$product->prijs}}</td>
                                                <td>
                                                    <form action="{{ route('producten.destroy',$product->id)}}" method="POST">
                                                        <a class="btn btn-sm btn-warning" href="{{ route('producten.edit',$product->id)}}">Bewerk</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">Verwijder</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product toevoegen modal -->
    <div class="modal fade" id="productToevoegen" tabindex="-1" role="dialog" aria-labelledby="productToevegenLabel" aria-hidden="true">
        <form class="form" action="{{ route('producten.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productToevegenLabel">Product toevoegen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- Product naam --}}
                        <div class="bmd-form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">fastfood</i>
                                    </span>
                                </div>
                                <input type="text" name="naam" class="form-control" placeholder="{{ __('Product naam...') }}" required>
                            </div>
                        </div>
                        {{-- Product beschrijving --}}
                        <div class="bmd-form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">create</i>
                                    </span>
                                </div>
                                <textarea class="form-control" style="height:150px" name="beschrijving" placeholder="Informatie" required></textarea>
                            </div>
                        </div>
                        {{-- Product prijs --}}
                        <div class="bmd-form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">euro_symbol</i>
                                    </span>
                                </div>
                                <input type="text" name="prijs" class="form-control" placeholder="{{ __('Product prijs...') }}" required>
                            </div>
                        </div>
                        {{-- Product categorie --}}
                        <div class="bmd-form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        {{-- <i class="material-icons">create</i> --}}
                                        <strong>Categorie</strong>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select" name="categorie" required>
                                        <option value="" disabled selected>--- {{__('Kies een categorie')}} ---</option>
                                        <option value="snacks">Snacks</option>
                                        <option value="salads">Salads</option>
                                        <option value="toasts">Toasts</option>
                                        <option value="sandwitches">Sandwitches</option>
                                        <option value="bagels">Bagels</option>
                                        <option value="theRoof">The Roof</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- Product locatie --}}
                        <div class="bmd-form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        {{-- <i class="material-icons">create</i> --}}
                                        <strong>Locatie</strong>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select" name="locatie" required>
                                        <option value="" disabled selected>--- {{__('Kies een locatie')}} ---</option>
                                        <option value="binnentuin">Binnentuin</option>
                                        <option value="The Roof">The Roof</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- Product image --}}
                        <div class="bmd-form-group">
                            <div class="input-group">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="material-icons">publish</i>
                                    </span>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileLangHTML" name="image">
                                        <label class="custom-file-label" for="customFileLangHTML" data-browse="Bestand kiezen">Voeg je foto toe</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                        <button type="submit" class="btn btn-primary">Toevoegen</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection