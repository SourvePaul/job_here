@extends('admin.master')
@section('title')
    Add-company
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">New Company Form</h3>
                        <h5 style="color: #0c4128;">{{session('message')}}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('new-company') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputCompanyName" name="company_name" type="text" placeholder="Enter company name" />
                                <label for="inputCompanyName">Company Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputCompanyLogo" name="cImage" type="file" />
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control"  name="address" id="inputAddress" cols="30" rows="10"></textarea>
                                <label for="inputAddress">Address</label>
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" value="save" class="form-control btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
