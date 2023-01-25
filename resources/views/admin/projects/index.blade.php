@extends('layouts.admin')

@section('content')
<div class="container mt-3">
    <h1>Lista Projects</h1>
    <table class="table ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Client Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($projects as $project)
              <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->client_name}}</td>
                <td>{{$project->slug}}</td>
              </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
