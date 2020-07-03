@extends('layouts.app', ['activePage' => 'bestellingen', 'titlepage' => __('Bestellingen')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Bestellingen</h4>
                            <p class="card-category">In deze tabel vind u een overzicht van alle bestellingen.</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>ID</th>
                                            <th>Naam</th>
                                            <th>Totaalprijs</th>
                                            <th>Status</th>
                                            <th>Datum</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($bestellingen as $order)
                                                <tr>
                                                    <td>{{ $order->id }}</td>
                                                    <td>{{ $order->naam }}</td>
                                                    <td>€{{ $order->totaalPrijs }}</td>
                                                    <td>{{ $order->status }}</td>
                                                    <td>{{ $order->created_at }}</td>
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
    </div>
@endsection