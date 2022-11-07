@extends('admin.master')
@section('title')
    Edit Company
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Company Form</h3></div>
                    <div class="card-body">
                        <form action="{{ route('update-company') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $company->id }}" name="company_id">
                            <div class="row mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputCompanyName" value="{{ $company->company_name }}" name="company_name" type="text" />
                                    <label for="inputCompanyName">Company Name</label>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control"  name="address" id="inputAddress" cols="30" rows="10">{{ $company->address }}</textarea>
                                <label for="inputAddress">Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputImage" name="cImage" type="file"/>
                                <img src="{{ asset($company->cImage) }}" style="height: 100px; width: 100px" alt="edit_company_image">
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" value="Edit Save" class="form-control btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
