@extends('backend.master')
@section('content')
    <div class="container-fluid">
        <h2 class="text-center">Manage Banner</h2>
        <table class="table table-bordered unique-table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>YEx</th>
                    <th>Main Des</th>
                    <th>Des2</th>
                    <th>Des3</th>
                    <th>Des4</th>
                    <th>imageone</th>
                    <th>Imagetwo</th>
                    <th>CliNum</th>
                    <th>CliDes</th>
                    <th>ProCom</th>
                    <th>ProjCoDes</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @if ($abouts->isNotEmpty())
            @foreach($abouts as $about)
              <tr>

                    <td>{{$about->id}}</td>
                    <td>{{$about->howmanyyearex}}</td>
                    <td>{{$about->des1}}</td>
                    <td>{{$about->des2}}</td>
                    <td>{{$about->des3}}</td>
                    <td>{{$about->des4}}</td>
                    <td>
                    <img height="44" width="44" src="{{ asset('backend/about/'.$about->imageone) }}" alt="Image Description">

                    </td>
                    <td>
                    <img height="44" width="44" src="{{ asset('backend/about2/'.$about->imagetwo) }}" alt="Image Description">

                    </td>
                    <td>{{$about->allclientsnum}}</td>
                    <td>{{$about->clientdes}}</td>
                    <td>{{$about->allprojectsnum}}</td>
                    <td>{{$about->projectdes}}</td>
                    <td>
                    <a href="{{route('editabout',$about->id)}}" class="btn btn-sm btn-info">Edit</a>
                    <a href="{{route('deleteabout',$about->id)}}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
              </tr>
            @endforeach
            @else
        <tr>
          <td colspan="13" class="text-center">No Data Found</td>
        </tr>
        @endif

            </tbody>
        </table>
    </div>
@endsection


