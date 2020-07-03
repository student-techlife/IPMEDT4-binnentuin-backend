@extends('layouts.app', ['activePage' => 'pretest', 'titlePage' => __('Pretest')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Pretest formulier</h4>
                            <p class="card-category">In deze tabel vind u een overzicht van alle mensen die een pretest in hebben gevuld.</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>Naam</th>
                                        <th>Aantal personen</th>
                                        <th>Symtomen</th>
                                        <th>Datum</th>
                                        <th>Tijd</th>
                                    </thead>
                                    <tbody>
                                        @foreach($pretests as $pretest)
                                            <tr>
    {{--                                            Todo: koppel with user--}}
    {{--                                            <td>{{$pretest->user->name}}</td>--}}
                                                <td>{{$pretest->name}}</td>
                                                <td>{{$pretest->persons}}</td>
                                                <td>{{$pretest->symptoms ? 'Ja' : 'Nee'}}</td>
                                                <td>{{$pretest->created_at}}</td>
                                                <td>{{$pretest->reservation_time}}</td>
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
@endsection
