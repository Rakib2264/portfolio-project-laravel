@extends('backend.master')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 custom-form">
            <h2>About Add</h2>
            <form action="{{ route('aboutstore') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="howmanyyearex">How Many Years Of Experience</label>
                    <input type="number" class="form-control" name="howmanyyearex" id="howmanyyearex"
                        placeholder="How Many Years Of Experience">
                </div>

                <div class="form-group">
                    <label for="des1">Main Description</label>
                    <input type="text" class="form-control" name="des1" id="des1" placeholder="Main Description">
                </div>

                <div class="form-group">
                    <label for="des2">Description 2</label>
                    <input type="text" class="form-control" name="des2" id="des2" placeholder="At Least Five Words">
                </div>

                <div class="form-group">
                    <label for="des3">Description 3</label>
                    <input type="text" class="form-control" name="des3" id="des3" placeholder="At Least Five Words">
                </div>

                <div class="form-group">
                    <label for="des4">Description 4</label>
                    <input type="text" class="form-control" name="des4" id="des4" placeholder="At Least Five Words">
                </div>

                <div class="form-group">
                    <label for="imageone">Image One</label>
                    <input type="file" class="form-control" name="imageone" id="imageone" placeholder="Enter Your Web">
                </div>

                <div class="form-group">
                    <label for="imagetwo">Image Two</label>
                    <input type="file" class="form-control" name="imagetwo" id="imagetwo"
                        placeholder="Enter Your Starting Free">
                </div>

                <div class="form-group">
                    <label for="allclientsnum">How Many Happy Clients Numbers?</label>
                    <input type="number" class="form-control" name="allclientsnum" id="allclientsnum"
                        placeholder="Happy Clients Numbers">
                </div>

                <div class="form-group">
                    <label for="clientdes">Happy Clients Description</label>
                    <input type="text" class="form-control" name="clientdes" id="clientdes"
                        placeholder="Happy Clients Description">
                </div>

                <div class="form-group">
                    <label for="allprojectsnum">How Many Projects Completed?</label>
                    <input type="number" class="form-control" name="allprojectsnum" id="allprojectsnum"
                        placeholder="How Many Projects Completed?">
                </div>

                <div class="form-group">
                    <label for="projectdes">Projects Completed Description</label>
                    <input type="text" class="form-control" name="projectdes" id="projectdes"
                        placeholder="How Many Projects Completed Description?">
                </div>
                <button type="submit" class="btn btn-info btn-block form-control mt-4">Add About</button>
            </form>
        </div>
    </div>
</div>
@endsection
