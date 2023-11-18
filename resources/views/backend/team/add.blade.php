@extends('backend.master')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10 custom-form">
                <h2>Add Team Member</h2>
                <form method="POST" action="{{ route('teamstore') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Member Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="Enter Your Project name">
                    </div>
                    <div class="form-group">
                        <label for="occupation">Member Occupation</label>
                        <input type="text" class="form-control" name="occupation" id="occupation"
                            placeholder="Enter Your Occupation lr least 3 Words">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Image</label>
                        <input type="file" class="form-control" name="image" id="email"
                            placeholder="Enter Your Project Image">
                    </div>


                    <button type="submit" class="btn btn-primary btn-block form-control mt-4">Add Member</button>
                </form>
            </div>
        </div>
    </div>
@endsection
