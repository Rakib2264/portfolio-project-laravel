@extends('backend.master')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Manage Members</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Member Name</th>
                                <th>Member Occupation</th>
                                <th>Member Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($teammembers->isNotEmpty())
                                @foreach ($teammembers as $teammember)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $teammember->name }}</td>
                                        <td>{{ $teammember->occupation }}</td>
                                        <td>

                                            <img height="70" width="90"
                                                src="{{ asset('backend/team/' . $teammember->image) }}" alt="Image Description">

                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{route('teamedit',$teammember->id)}}"><button class="btn btn-warning btn-sm mx-1"><i class="fas fa-edit fa-pulse"></i></button></a>
                                                <a href="{{route('teamdelete',$teammember->id)}}"><button class="btn btn-danger btn-sm mx-1"><i class="  fa-solid fa-trash fa-beat"></i></button></a>

                                            </div>
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
            </div>

        </div>
    </div>

@endsection
