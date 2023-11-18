@extends('backend.master')
@section('content') 
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 custom-form">
            <h2>Contact Us</h2>
            <form method="POST" action="{{ route('bannereditstore',$banner->id) }}" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="{{ $banner->name }}" name="name" id="name" placeholder="Enter Your name">
                </div>
                <div class="form-group">
                  <div>
                    
                    <img height="60" width="60" src="{{ asset('backend/banner/'.$banner->banner_image) }}" alt="Image Description">
                </div>
                
                  <label for="email">Banner Image</label>
                  <input type="file" class="form-control" value="{{ $banner->image }}" name="image" id="email" placeholder="Enter Your Banner Image">
              </div>
              <div class="form-group">
                <div>
                  <a href="{{ asset('backend/cv/'.$banner->cv) }}" target="_blank">View PDF</a>
              </div>
              
                <label for="email">Resume/Pdf</label>
                <input type="file" class="form-control" value="{{ $banner->cv }}" name="cv" id="email" placeholder="Enter Your Resume">
            </div>
            <div class="form-group">
              <label for="name">Video Link</label>
              <input type="text" class="form-control" value="{{ $banner->link }}" name="link" id="name" placeholder="Enter Link">
          </div>
                <button type="submit" class="btn btn-primary btn-block form-control mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>
 

@endsection