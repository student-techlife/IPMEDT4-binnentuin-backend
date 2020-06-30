@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <!-- START OPENINGSTIJDEN AANPASSEN-->
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
              <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                  <span class="nav-tabs-title">Openingstijden aanpassen:</span>
                  <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="#binnentuin" data-toggle="tab">
                        <i class="material-icons">house</i> Binnentuin
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#theroof" data-toggle="tab">
                        <i class="material-icons">roofing</i> The Roof
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active" id="binnentuin">
                  @if (session('status'))
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                          </button>
                          <span>{{ session('status') }}</span>
                        </div>
                      </div>
                    </div>
                  @endif
                  @if (session('error'))
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                          </button>
                          <span>{{ session('error') }}</span>
                        </div>
                      </div>
                    </div>
                  @endif
                  <p class="card-category">Hier kunt u de openingstijden van de Binnentuin aanpassen. Wanneer u de locatie voor een of meerdere dagen wilt sluiten hoeft u geen openings- en sluitingstijd in te vullen. Wanneer u de locatie vervolgens wilt openen moet u wel de openingstijden invullen.</p>
                  <form method="post" action="{{ route('home.update') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('PATCH')
                      <div class="form-row">
                        <div class="col">
                          <label for="dag_van_week">Dag:</label>
                          <select class="form-control" name="dag_van_week1">
                            @foreach($binnentuin as $dag)
                              <option value={{ $dag->dag_van_week}}>{{ $dag->dag_van_week}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col">
                          <label for="status">Status:</label>
                          <select class="form-control" name="status">
                            <option value="Open">Open</option>
                            <option value="Gesloten">Gesloten</option>
                          </select>
                        </div>
                        <div class="col">
                          <label class="col-form-label" for="openingstijd">Openingstijd:</label>
                          <input class="form-control" type="text" name="openingstijd" placeholder="14:00">
                        </div>
                        <div class="col">
                          <label class="col-form-label" for="sluitingstijd">Sluitingstijd:</label>
                          <input class="form-control" type="text" name="sluitingstijd" placeholder="21:00">
                        </div>
                      </div>
                      <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">Aanpassen</button>
                      </div>
                  </form>
                </div>
                <div class="tab-pane" id="theroof">
                  <p class="card-category">Hier kunt u de openingstijden van The Roof aanpassen. Wanneer u de locatie voor een of meerdere dagen wilt sluiten hoeft u geen openings- en sluitingstijd in te vullen. Wanneer u de locatie vervolgens wilt openen moet u wel de openingstijden invullen.</p>
                  <form method="post" action="{{ route('home.update') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('PATCH')
                    <div class="form-row">
                      <div class="col">
                        <label for="dag_van_week">Dag:</label>
                        <select class="form-control" name="dag_van_week">
                          @foreach($theroof as $dag)
                            <option value={{ $dag->dag_van_week}}>{{ $dag->dag_van_week}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col">
                        <label for="status">Status:</label>
                        <select class="form-control" name="status">
                          <option value="Open">Open</option>
                          <option value="Gesloten">Gesloten</option>
                        </select>
                      </div>
                      <div class="col">
                        <label class="col-form-label" for="openingstijd">Openingstijd:</label>
                        <input class="form-control" type="text" name="openingstijd" placeholder="14:00">
                      </div>
                      <div class="col">
                        <label class="col-form-label" for="sluitingstijd">Sluitingstijd:</label>
                        <input class="form-control" type="text" name="sluitingstijd" placeholder="21:00">
                      </div>
                    </div>
                      <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">Aanpassen</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- END OPENINGSTIJDEN AANPASSEN-->

      <!-- START OPENINGSTIJDEN SCHEMA -->
        <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
              <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                  <span class="nav-tabs-title">Huidige openingstijden:</span>
                  <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="#binnentuinOT" data-toggle="tab">
                        <i class="material-icons">house</i> Binnentuin
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#theroofOT" data-toggle="tab">
                        <i class="material-icons">roofing</i> The Roof
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active" id="binnentuinOT">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>Dag</th>
                        <th>Status</th>
                        <th>Openingstijd</th>
                        <th>Sluitingstijd</th>
                      </thead>
                      <tbody>
                        @foreach($binnentuin as $rij)
                          <tr>
                            <td> {{ $rij->dag_van_week}} </td>
                            <td>
                              @if($rij->status==0)
                                Gesloten
                                @else
                                  Open
                              @endif
                            </td>
                            <td> {{ $rij->openingstijd}} </td>
                            <td> {{ $rij->sluitingstijd}} </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane" id="theroofOT">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>Dag</th>
                        <th>Status</th>
                        <th>Openingstijd</th>
                        <th>Sluitingstijd</th>
                      </thead>
                      <tbody>
                        @foreach($theroof as $rij)
                          <tr>
                            <td> {{ $rij->dag_van_week}} </td>
                            <td>
                              @if($rij->status==0)
                                Gesloten
                                @else
                                  Open
                              @endif
                            </td>
                            <td> {{ $rij->openingstijd}} </td>
                            <td> {{ $rij->sluitingstijd}} </td>
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
      <!-- END OPENINGSTIJDEN SCHEMA -->
      <!-- END OPENINGSTIJDEN ROW -->

      <!-- START AANTAL ROW -->
      <!-- START AANTAL AANPASSEN -->
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
              <h4 class="card-title">Maximale aantal aanpassen</h4>
              <p class="card-category">Aantal bezoekers tijdens een tijdshift aanpassen</p>
            </div>

            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active">
                  @if (session('statusaantal'))
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                          </button>
                          <span>{{ session('statusaantal') }}</span>
                        </div>
                      </div>
                    </div>
                  @endif
                  @if (session('erroraantal'))
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                          </button>
                          <span>{{ session('erroraantal') }}</span>
                        </div>
                      </div>
                    </div>
                  @endif

                  <p class="card-category">U kunt hier aangeven hoeveel gebruikers er maximaal bij een tijdshift aanwezig mogen zijn. Door de wisselende regels m.b.t. het COVID-19 virus maakt dit systeem het mogelijk om eenvoudig te voldoen aan de restricties qua het maximum aantal bezoekers.</p>
                  <form method="post" action="{{ route('home.aanpassen') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('PATCH')
                      <div class="form-row">
                        <div class="col">
                          <label for="id">Tijdslot:</label>
                          <select class="form-control" name="dag_deel1">
                            @foreach($reserveertijden as $moment)
                              <option value={{ $moment->id}}>{{$moment->id}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col">
                          <label class="col-form-label" for="max_aantal">Maximale aantal:</label>
                          <input class="form-control" type="text" name="max_aantal" placeholder="30">
                        </div>
                      </div>
                      <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">Aanpassen</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END AANTAL AANPASSEN -->

        <!-- START AANTAL SCHEMA -->
        <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
              <h4 class="card-title">Huidig maximale aantal </h4>
              <p class="card-category">Overzicht van de huidige maximale aantallen</p>
            </div>

            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>Tijdslot</th>
                        <th>Maximaal aantal</th>
                      </thead>
                      <tbody>
                        @foreach($reserveertijden as $rij)
                          <tr>
                            <td> {{ $rij->id}} </td>
                            <td> {{ $rij->max_aantal}} </td>
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
        <!-- END AANTAL SCHEMA -->
        <!-- END AANTAL ROW -->
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
