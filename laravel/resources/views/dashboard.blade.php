@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <p class="card-category">Used Space</p>
              <h3 class="card-title">49/50
                <small>GB</small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-danger">warning</i>
                <a href="#pablo">Get More Space...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Revenue</p>
              <h3 class="card-title">$34,245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i> Last 24 Hours
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Fixed Issues</p>
              <h3 class="card-title">75</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i> Tracked from Github
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-twitter"></i>
              </div>
              <p class="card-category">Followers</p>
              <h3 class="card-title">+245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> Just Updated
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-success">
              <div class="ct-chart" id="dailySalesChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Daily Sales</h4>
              <p class="card-category">
                <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> updated 4 minutes ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-warning">
              <div class="ct-chart" id="websiteViewsChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Email Subscriptions</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-danger">
              <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Completed Tasks</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- START OPENINGSTIJDEN ROW -->
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
                  <p class="card-category">Hier kunt u de openingstijden van de Binnentuin aanpassen. Wanneer u de locatie voor een of meerdere dagen wilt sluiten hoeft u geen openings- en sluitingstijd in te vullen. Wanneer u de locatie vervolgens wilt openen moet u wel de openingstijden invullen.</p>
                  <form method="post" action="{{ route('home.update') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                      <div class="form-row">
                        <div class="col">
                          <label for="dag_van_week">Dag:</label>
                          <select class="form-control" name="dag_van_week">
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
                  <form method="post" action="{{ route('home.update') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
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
                        <label class="col-form-label" for="openingstijd">Openingstijd:</label>
                        <input class="form-control" type="text" name="openingstijd" placeholder="14:00" required>
                      </div>
                      <div class="col">
                        <label class="col-form-label" for="sluitingstijd">Sluitingstijd:</label>
                        <input class="form-control" type="text" name="sluitingstijd" placeholder="21:00" required>
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
                        <th>
                          Dag
                        </th>
                        <th>
                          Openingstijd
                        </th>
                        <th>
                          Sluitingstijd
                        </th>
                      </thead>
                      <tbody>
                        @foreach($binnentuin as $rij)
                          <tr>
                            <td> {{ $rij->dag_van_week}} </td>
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
                        <th>
                          Dag
                        </th>
                        <th>
                          Openingstijd
                        </th>
                        <th>
                          Sluitingstijd
                        </th>
                      </thead>
                      <tbody>
                        @foreach($theroof as $rij)
                          <tr>
                            <td> {{ $rij->dag_van_week}} </td>
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

      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
              <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                  <span class="nav-tabs-title">Tasks:</span>
                  <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="#profile" data-toggle="tab">
                        <i class="material-icons">bug_report</i> Bugs
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#messages" data-toggle="tab">
                        <i class="material-icons">code</i> Website
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#settings" data-toggle="tab">
                        <i class="material-icons">cloud</i> Server
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active" id="profile">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked>
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked>
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="messages">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked>
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="settings">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked>
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked>
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Employees Stats</h4>
              <p class="card-category">New employees on 15th September, 2016</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Salary</th>
                  <th>Country</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Dakota Rice</td>
                    <td>$36,738</td>
                    <td>Niger</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Minerva Hooper</td>
                    <td>$23,789</td>
                    <td>Curaçao</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Sage Rodriguez</td>
                    <td>$56,142</td>
                    <td>Netherlands</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Philip Chaney</td>
                    <td>$38,735</td>
                    <td>Korea, South</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
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
