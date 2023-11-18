@extends('backend.master')
@section('content')

 
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 custom-form">
            <h2>Banner Add</h2>
            <form method="POST" action="{{ route('bannerstore') }}" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your name">
                </div>
                <div class="form-group">
                  <label for="email">Banner Image</label>
                  <input type="file" class="form-control" name="image" id="email" placeholder="Enter Your Banner Image">
              </div>
              <div class="form-group">
                <label for="email">Resume/Pdf</label>
                <input type="file" class="form-control" name="cv" id="email" placeholder="Enter Your Resume">
            </div>
            <div class="form-group">
              <label for="name">Video Link</label>
              <input type="text" class="form-control" name="link" id="name" placeholder="Enter Link">
          </div>
                <button type="submit" class="btn btn-primary btn-block form-control mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>
 

 




@endsection