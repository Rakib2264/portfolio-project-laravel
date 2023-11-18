@extends('backend.master')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Manage Message</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            @if ($contactmanage->isNotEmpty())
                                @foreach ($contactmanage as $contactmanage)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $contactmanage->name }}</td>
                                        <td>{{ $contactmanage->email }}</td>
                                        <td>{{ $contactmanage->subject }}</td>
                                        <td>{{ $contactmanage->msg }}</td>

                                        <td>
                                            <div class="d-flex justify-content-center">

                                                <a href="{{route('contactdelete',$contactmanage->id)}}"><button
                                                        class="btn btn-danger btn-sm mx-1"><i
                                                            class="fa-solid fa-trash fa-beat"></i></button></a>

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
