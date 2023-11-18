@extends('backend.master')
@section('content')

<div class="container mt-5">
  <h2 class="text-center">Manage Project</h2>
  <table class="table table-bordered unique-table">
      <thead>
          <tr>
              <th>SL</th>
              <th>Name</th>
              <th>Project Image</th>
               <th>Action</th>
          </tr>
      </thead>
      <tbody>
        @if ($projects->isNotEmpty())
        @foreach ($projects as $project)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $project->name }}</td>
          <td>

              <img height="70" width="90" src="{{ asset('backend/project/'.$project->image) }}" alt="Image Description">

          </td>

          <td>
              <a href="{{route('projectedit',$project->id)}}" class="btn btn-sm btn-info">Edit</a>
              <a href="{{route('projectdelete',$project->id)}}" class="btn btn-sm btn-danger">Delete</a>
          </td>
       </tr>
        @endforeach
        @else
        <tr>
          <td colspan="6" class="text-center">No Data Found</td>
        </tr>
        @endif

      </tbody>
  </table>
</div>

@endsection
