@extends('admin.master')
@section('title')
    Manage-company
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-hover table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr class="text-center">
                        <th>Sl No</th>
                        <th>Company Name</th>
                        <th>Company Address</th>
                        <th>Logo</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=1
                    @endphp
                    @foreach($companies as $company)

                        <tr class="text-center">
                            <td> {{ $i++ }} </td>
                            <td> {{ $company->company_name}} </td>
                            <td> {{ $company->address }} </td>
                            <td>
                                <img src="{{asset($company->cImage)}}" alt="company-image" style="width: 100px;height: 100px; border-radius: 50%; border: 1px solid #eee;">
                            </td>
                            <td>{{ $company->status==1?'Published':'Unpublished' }}</td>
                            <td>
                                @if($company->status==1)
                                    <a href="{{route('cStatus',['id' => $company->id]) }}" class="btn btn-warning">Unpublished</a>
                                @else
                                <a href="{{route('cStatus',['id' => $company->id])}}" class="btn btn-success">Published</a>
                                    @endif
                                <br>
                                    <a href="{{ route('edit-company',['id' => $company->id]) }}" class="btn btn-primary">Edit Company</a>
                                <a>
                                    <form action="{{route('delete-company')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $company->id }}" name="company_id">
                                        <input type="submit" value="Delete Company" class="btn btn-danger" onclick="return confirm('Are you confirm delete this!!')">
                                    </form>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
