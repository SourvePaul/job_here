@extends('admin.master')
@section('title')
    Slider
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Slider Form</h3></div>
                    <div class="card-body">
                        <form action="{{ route('update-slider') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $slider->id }}" name="slider_id">
                            <div class="row mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputTitle" value="{{ $slider->title }}" name="title" type="text" />
                                    <label for="inputTitle">Title</label>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control"  name="contenti" id="inputContent" cols="30" rows="10">{{ $slider->contenti }}</textarea>
                                <label for="inputContent">Content</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputImage" name="sImage" type="file"/>
                                <img src="{{ asset($slider->sImage) }}" style="height: 100px; width: 100px" alt="edit_slider_image">
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
