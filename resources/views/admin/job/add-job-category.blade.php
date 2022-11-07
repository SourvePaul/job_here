@extends('admin.master')
@section('title')
    Job Category
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">New Job Category Form</h3>
                    </div>
                    <h5 style="color: #0c4128;">{{session('message')}}</h5>
                    <div class="card-body">
                        <form action="{{ route('new-job-category') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="category_name" id="inputCategoryName" />
                                <label for="inputCategoryName">Category Name</label>
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" value="Save" class="form-control btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
