@extends('layouts.admin')

@section('content')
<div class="container mt-3">
    <div class="d-flex align-items-center">
        <h1>Lista Projects</h1>
        <a href="#" class="btn btn-success h-100 ms-3"><i class="fa-regular fa-square-plus fa-lg fa-fw"></i> </a>
    </div>
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
                <td class="dropdown d-flex">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Azioni
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{route('admin.projects.show' , $project->slug)}}" class="dropdown-item" >info</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">modifica</a>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-danger ms-2">Elimina</a>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
                    
