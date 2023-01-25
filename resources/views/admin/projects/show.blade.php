@extends('layouts.admin')



@section('content')
    <div class="container mt-3">
        <h1>{{$project->title}}</h1>
        <h3>Progetto eseguito per: {{$project->client_name}}</h3>
        <p>
            {{$project->description}}
        </p>
    </div>
@endsection