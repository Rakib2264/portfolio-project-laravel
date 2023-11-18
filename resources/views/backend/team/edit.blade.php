@extends('backend.master')
@section('content')


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10 custom-form">
            <h2>Edit Project</h2>
            <form method="POST" action="{{route('teamupdate',$teamedit->id)}}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="name">Member Name</label>
                <input type="text" class="form-control" value="{{$teamedit->name}}" name="name" id="name"
                    placeholder="Enter Your Project name">
            </div>
            <div class="form-group">
                <label for="occupation">Member Occupation</label>
                <input type="text" class="form-control" value="{{$teamedit->occupation}}" name="occupation" id="occupation"
                    placeholder="Enter Your Occupation lr least 3 Words">
            </div>
            <div class="form-group mt-2">
                <input type="file">
                 <img height="70" width="90" src="{{ asset('backend/team/' . $teamedit->image) }}" alt="Image Description">
            </div>


                <button type="submit" class="btn btn-primary btn-block form-control mt-4">Update</button>
            </form>
        </div>
    </div>
</div>







@endsection
