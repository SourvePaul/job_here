@extends('admin.master')
@section('title')
    Edit Job-Category
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Job Category Form</h3></div>
                    <div class="card-body">
                        <form action="{{ route('update-job-category') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $jobCategory->id }}" name="jobCategory_id">
                            <div class="form-floating mb-3">
                                <input class="form-control"  name="category_name" id="inputCategory" value="{{ $jobCategory->category_name }}">
                                <label for="inputCategory">Category Name</label>
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
