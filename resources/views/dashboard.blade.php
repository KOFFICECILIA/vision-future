@extends('layouts.app')

@section('title')
  <title>Detect-app</title>
@endsection
    
@section('css')
  <link rel="stylesheet" href="ressources/css/dash.css">
@endsection

@section('content')
  <!-- main section -->
  <div class="main-content">
    <div class="container-fluid">
      <h1 class="section-title mb-4 mt-4">Dashboard</h1><br> <br><br>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
          <div class="dashboard-card bg-c1">
            <div class="dashboard-card__icon-box bg-c1">
              <img src="ressources/images/value.svg"  class="img-fluid" alt="icon">
            </div>
            <h3>Total Etudiants <span>750</span></h3>
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br>
            <h4>45% des candidats national </h4>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
          <div class="dashboard-card bg-c2">
            <div class="dashboard-card__icon-box bg-c2">
              <img src="Ressources/images/school.svg"  class="img-fluid" alt="icon">    
            </div>
            <h3>Classes d'examen <span>25</span></h3>
            <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br>
            <h4>niveau 3ieme et Tle</h4>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
          <div class="dashboard-card bg-c3">
            <div class="dashboard-card__icon-box bg-c3">
              <img src="Ressources/Icons/graduate-cap.svg"  class="img-fluid" alt="icon">
            </div>
            <h3>Total Etudiants <span>750</span></h3>
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br>
            <h4>45% des candidats national </h4>            
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
          <div class="dashboard-card bg-c4">
            <div class="dashboard-card__icon-box bg-c4">
              <img src="Ressources/Icons/information.svg"  class="img-fluid" alt="icon">
            </div>
            <h3>Total Etudiants <span>750</span></h3>
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br>
            <h4>45% des candidats national </h4>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <div class="row mt-4">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
          <div class="dashboard-card">
            <h3 class="text-capitalize dashboard-title">Niveau Troisième</h3>
            <div class="card card-box">
              <div class="card-head">
                <header>University Survey</header>
                <div class="tools">
                  <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                  <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                  <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                </div>
              </div>
              <div class="card-body">
              <canvas id="myChart" width="400" height="400"></canvas>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
              <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Math', 'physique', 'SVT', 'Philo', 'Français', 'Anglais'],
                        datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                      scales: {
                        yAxes: [
                          {
                            ticks: {
                                beginAtZero: true
                            }
                          }
                        ]
                      }
                    }
                });
              </script>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
          <div class="dashboard-card">
            <h3 class="text-capitalize dashboard-title">Niveau terminal</h3>
            <div class="card card-box">
              <div class="card-head">
                <header>University Survey</header>
                <div class="tools">
                  <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                  <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                  <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                </div>
              </div>
              <div class="card-body">
                <canvas id="myChart2" width="400" height="400"></canvas>
              <script>
                var ctx2 = document.getElementById('myChart2').getContext('2d');
                var myChart2 = new Chart(ctx2, {
                  type: 'pie',
                  data: {
                    datasets: [
                      {
                        data: [10, 20]
                      }
                    ],
                    // These labels appear in the legend and in the tooltips when hovering different arcs
                    labels: [
                      'Admis',
                      'Echec'
                    ],
                    backgroundColor: [
                        // 'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.4)',
                        'rgba(255, 206, 86, 0.9)',
                        // 'rgba(75, 192, 192, 0.2)',
                        // 'rgba(153, 102, 255, 0.2)',
                        // 'rgba(255, 159, 64, 0.2)'
                    ]
                  }
                });
              </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  -->
  <section>
    <div class="container">
      <div class="text-bg">
        <h1>"L'éducation de demain, ancrée dans la tradition vous invite"</h1>
        <h4>Notre objectif est de fournir à votre enfant un environnement sûr et heureux, où il pourra être lui-même et s'épanouir; tout en acquérant les bases pédagogiques nécessaires pour atteindre</h4>
      </div>
    </div>
  </section>
@endsection    

@section('scripts')
  <script src="ressources/js/main.js"></script>
@endsection