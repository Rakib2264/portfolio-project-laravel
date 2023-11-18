@extends('backend.master')
@section('content')
    <div class="container mt-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                class="fa-solid fa-plus"></i></button>
        <h2 class="text-center">Manage Banner</h2>
        <table class="table table-bordered unique-table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Web</th>
                    <th>Charge Start</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="allData">

            </tbody>
        </table>
    </div>
@endsection


{{-- Modal Add --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: rgb(46, 230, 9)">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Service</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <div class="form-group">
                    <label for="name">Web</label>
                    <input type="text" class="form-control web" name="name" id="name"
                        placeholder="Enter Your name">
                </div>
                <div class="form-group">
                    <label for="name">Start Free</label>
                    <input type="number" class="form-control start" name="name" id="name"
                        placeholder="Enter Your Starting Free">
                </div>
                <div class="form-group">
                    <label for="name">Web Description</label>
                    <input type="text" class="form-control desc" name="name" id="name"
                        placeholder="Enter Your name">
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="submit" class="btn btn-info add-service">Add</button>
            </div>
        </div>
    </div>
</div>
{{-- Modal Update --}}
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: rgb(233, 201, 23)">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Web</label>
                    <input type="text" class="form-control webv" name="name" id="name"
                        placeholder="Enter Your Web">
                </div>
                <div class="form-group">
                    <label for="name">Start Free</label>
                    <input type="number" class="form-control startv" name="name" id="name"
                        placeholder="Enter Your Starting Free">
                </div>
                <div class="form-group">
                    <label for="name">Web Description</label>
                    <input type="text" class="form-control descv" name="name" id="name"
                        placeholder="Enter Your Desc">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                <button type="submit" class="btn btn-info updateservice">Submit</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Delete --}}
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: rgb(68, 207, 241)">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Confiram Message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are You Sure You Want To Delete This Item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger delete-service">Delete</button>
            </div>
        </div>
    </div>
</div>
