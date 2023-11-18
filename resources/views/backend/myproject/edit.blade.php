@extends('backend.master')
@section('content')


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 custom-form">
            <h2>Edit Project</h2>
            <form method="POST" action="{{route('projectstoreupdate',$project->id)}}" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="name">Project Name</label>
                    <input type="text" class="form-control" value="{{$project->name}}" name="name" id="name" placeholder="Enter Your Project name">
                </div>
                <div class="form-group">
                  <label for="email">Project Image</label>
                  <input type="file" class="form-control" name="image" id="email" placeholder="Enter Your Project Image">
                  <img height="70" width="90" src="{{ asset('backend/project/'.$project->image) }}" alt="Image Description">
                </div>


                <button type="submit" class="btn btn-primary btn-block form-control mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>







@endsection
