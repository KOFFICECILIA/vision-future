@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <div class="row u-mb-standard">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3">
                <div class="dashboard-card bg-c1">
                    <div class="dashboard-card__icon-box bg-c1">
                        <img src="1.png"  class="img-fluid" alt="icon">
                    </div>
                    <h3>total étudiants</h3>
                    <h2 style="color: var(--color-secondary);">&ensp; {{$students->count() }}</h2>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3">
                <div class="dashboard-card bg-c2">
                    <div class="dashboard-card__icon-box bg-c2">
                        <img src="2.png"  class="img-fluid" alt="icon">    
                    </div>
                    <h3>classes</h3>
                    <h2 style="color: var(--color-secondary);">&ensp; {{$classes->count()}}</h2>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3">
                <div class="dashboard-card bg-c3">
                    <div class="dashboard-card__icon-box bg-c3">
                        <img src="3.png"  class="img-fluid" alt="icon">
                    </div>
                    <h3>Classe d'examen</h3>
                    @php
                        $exam_classe = collect($classes)->filter(function($classe){
                            return $classe->level->is_exam_level;
                        });
                    @endphp
                    <h2 style="color: var(--color-secondary);">&ensp; {{$exam_classe->count()}}</h2>
                </div>
            </div>
            {{--<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
                <div class="dashboard-card bg-c4">
                    <div class="dashboard-card__icon-box bg-c4">
                        <img src="undraw_exams_g4ow.svg"  class="img-fluid" alt="icon">
                    </div>
                    <h3>visiteur</h3>
                    <h2 style="color: var(--color-secondary);">&ensp; 2 786</h2>
                </div>
            </div>--}}
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                <div class="dashboard-card">
                    <h3 class="text-capitalize dashboard-title">Nombre d'élève par classe</h3>
                    @php
                        $rgbs = collect($classes)->map(function(){
                            return 'rgba('.rand(0,255).','.rand(0,255).','.rand(0,255).', 0.4)';
                        })->toArray();
                        $titles = collect($classes)->map(function($classe){
                            return $classe->title;
                        })->toArray();
                        $counts = collect($classes)->map(function($classe){
                            return $classe->students->count();
                        })->toArray();
                    @endphp
                    <div class="card card-box">
                        <div class="card-head">
                        <!-- <header>University Survey</header> -->
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
                                labels: @json($titles),
                                datasets: [{
                                    label: '# of Votes',
                                    data: @json($counts),
                                    backgroundColor: @json($rgbs),
                                    borderColor: @json($rgbs),
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
                    <h3 class="text-capitalize dashboard-title">Statistique classe</h3>
                    <div class="card card-box">
                        <div class="card-head">
                            <!-- <header>University Survey</header> -->
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
                                    data: [{{$exam_classe->count()}}, {{$classes->count() - $exam_classe->count()}}],
                                    backgroundColor: [
                                        'rgba(54, 162, 235, 0.4)',
                                        'rgba(255, 206, 86, 0.9)'
                                    ]
                                }
                                ],
                                labels: [
                                    'Classe d\'examen',
                                    'classe normal'
                                ],
                               
                            }
                            });
                        </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="my-5 dashboard-card">
            <div class="container-fluid">
                <h3 class="text-capitalize dashboard-title">liste des classe</h3>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Niveau</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($classes as $classe)
                        <tr>
                        <td>{{$classe->title}}</td>
                        <td>{{$student->level->title ?? ''}}</td>
                        <td>
                            <a href="{{ route('classes.edit', [$classe->id]) }}" class="action-btn btn-color1">modifier</a>
                            {!! Form::open(['route' => ['classes.destroy', $classe->id], 'method' => 'delete']) !!}
                                {!! Form::button('supprimer', ['type' => 'submit', 'class' => 'action-btn btn-color2', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            {!! Form::close() !!}
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <section class="my-5 dashboard-card">
            <div class="container-fluid">
                <h3 class="text-capitalize dashboard-title">liste des élèves</h3>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Photos</th>
                        <th scope="col">Nom élèves</th>
                        <th scope="col">Matricule</th>
                        <th scope="col">Niveau</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                        <th scope="row">
                            @if(!is_null($student->photo))
                                <img src="{{asset('storage/'.$student->photo)}}" class="img-fluid student-img" alt="icon"> 
                            @endif
                        </th>
                        <td>{{$student->name}} {{$student->lastname}}</td>
                        <td>{{$student->matricule}}</td>
                        <td>{{$student->classe->level->title ?? ''}}</td>
                        <td>
                            <a href="{{ route('students.edit', [$student->id]) }}" class="action-btn btn-color1">modifier</a>
                            {!! Form::open(['route' => ['students.destroy', $student->id], 'method' => 'delete']) !!}
                                {!! Form::button('supprimer', ['type' => 'submit', 'class' => 'action-btn btn-color2', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            {!! Form::close() !!}
                        </td>
                        </tr>
                        @endforeach
                        {{--<tr>
                        <th scope="row">
                            <img src="undraw_book_lover_mkck.svg" class="img-fluid student-img" alt="icon"> 
                        </th>
                        <td>koffi mouayé</td>
                        <td>144 255 H</td>
                        <td>Terminal</td>
                        <td><button class="action-btn btn-color1">modifier</button> <button class="action-btn btn-color2">supprimer</button></td>
                        </tr>
                        <tr>
                        <th scope="row">
                            <img src="undraw_book_lover_mkck.svg" class="img-fluid student-img" alt="icon"> 
                        </th>
                        <td>koffi mouayé</td>
                        <td>144 255 H</td>
                        <td>Terminal</td>
                        <td><button class="action-btn btn-color1">modifier</button> <button class="action-btn btn-color2">supprimer</button></td>
                        </tr>
                        <tr>
                        <th scope="row">
                            <img src="undraw_book_lover_mkck.svg" class="img-fluid student-img" alt="icon"> 
                        </th>
                        <td>koffi mouayé</td>
                        <td>144 255 H</td>
                        <td>Terminal</td>
                        <td><button class="action-btn btn-color1">modifier</button> <button class="action-btn btn-color2">supprimer</button></td>
                        </tr>
                        <tr>
                        <th scope="row">
                            <img src="undraw_book_lover_mkck.svg" class="img-fluid student-img" alt="icon"> 
                        </th>
                        <td>koffi mouayé</td>
                        <td>144 255 H</td>
                        <td>Terminal</td>
                        <td><button class="action-btn btn-color1">modifier</button> <button class="action-btn btn-color2">supprimer</button></td>
                        </tr>
                        <tr>
                        <th scope="row">
                            <img src="undraw_book_lover_mkck.svg" class="img-fluid student-img" alt="icon"> 
                        </th>
                        <td>koffi mouayé</td>
                        <td>144 255 H</td>
                        <td>Terminal</td>
                        <td><button class="action-btn btn-color1">modifier</button> <button class="action-btn btn-color2">supprimer</button></td>
                        </tr>--}}
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection