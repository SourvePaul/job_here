@extends('admin.master')
@section('title')
    Manage Job-Category
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-hover table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr class="text-center">
                        <th>Sl No</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=1
                    @endphp
                    @foreach( $jobCategories as $jobCategory)

                        <tr class="text-center">
                            <td> {{ $i++ }} </td>
                            <td> {{ $jobCategory->category_name}} </td>
                            <td>{{ $jobCategory->status==1?'published':'Unpublished' }}</td>
                            <td>
                                @if($jobCategory->status==1)
                                    <a href="{{ route('status',['id'=>$jobCategory->id]) }}" class="btn btn-outline-warning">unpublished</a>
                                @else
                                    <a href="{{ route('status',['id'=>$jobCategory->id]) }}" class="btn btn-outline-success">published</a>
                                @endif
                                <br>
                                <a href="{{ route('edit-job-category',['id'=>$jobCategory->id]) }}" class="btn btn-outline-primary">Edit category</a>
                                <br>
                                <a>
                                    <form action="{{ route('delete-job-category') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $jobCategory->id }}" name="jobCategory_id">
                                        <input type="submit" value="Delete Category" class="btn btn-outline-danger" onclick="return confirm('are you confirm delete this !!')">
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
