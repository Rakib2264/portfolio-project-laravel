@extends('backend.master')
@section('content')

<div class="container mt-5">
  <h2 class="text-center">Manage Banner</h2>
  <table class="table table-bordered unique-table">
      <thead>
          <tr>
              <th>SL</th>
              <th>Name</th>
              <th>Banner Image</th>
              <th>CV</th>
               <th>Action</th>
          </tr>
      </thead>
      <tbody>
        @if ($banner->isNotEmpty())  
        @foreach ($banner as $banner)  
        <tr>
          <td>{{ $loop->iteration }}</td>  
          <td>{{ $banner->name }}</td>
          <td>
                    
              <img height="70" width="90" src="{{ asset('backend/banner/'.$banner->banner_image) }}" alt="Image Description">
        
          </td>
           <td>
            <a href="{{ asset('backend/cv/'.$banner->cv) }}" target="_blank">View PDF</a>  
          </td>
          <td> 
              <a href="{{ route('banneredit',$banner->id) }}" class="btn btn-sm btn-info">Edit</a>
              <a href="{{ route('bannerdelete',$banner->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
