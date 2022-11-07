@extends('admin.master')
@section('title')
    Slider
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">New Slider Form</h3>
                    <h5 style="color: #0c4128;">{{session('message')}}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('new-slider') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputTitle" name="title" type="text" placeholder="Enter Title" />
                                <label for="inputTitle">Title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control"  name="contenti" id="inputContent" cols="30" rows="10"></textarea>
                                <label for="inputContent">Content</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" name="sImage" type="file" />
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" value="submit" class="form-control btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
