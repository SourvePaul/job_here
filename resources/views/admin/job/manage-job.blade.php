@extends('admin.master')
@section('title')
    Job-Manage
@endsection
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">All Jobs Table</h1>
        <h6 style="color: #0c4128;">{{session('message')}}</h6>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Jobs Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Details
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr class="text-center">
                        <th>Sl No.</th>
                        <th>Job Category Name</th>
                        <th>Company Name</th>
                        <th>Position</th>
                        <th>Vacancy</th>
                        <th>Employment Status</th>
                        <th>Experience</th>
                        <th>Age</th>
                        <th>Job Location</th>
                        <th>Salary</th>
                        <th>Job Responsibilities</th>
                        <th>Educational</th>
                        <th>Skills</th>
                        <th>Compensation and others benefits</th>
                        <th>Job source</th>
                        <th>Apply Email</th>
                        <th>Published Date</th>
                        <th>Application Deadline Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach($jobs as $job)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{ $job->category_name }}</td>
                            <td>{{ $job->company_name }}</td>
                            <td>{{ $job->position }}</td>
                            <td>{{ $job->vacancy }}</td>
                            <td>{{ $job->employment_status }}</td>
                            <td>
                                @if(strlen($job->experience)>100)
                                    {!! substr($job->experience,0,100) !!}
                                    <a href="" onclick="{!! substr($job->experience,1000) !!}">read more</a>
                                @else
                                {!! $job->experience !!}
                                    @endif
                            </td>
                            <td>{{ $job->age }}</td>
                            <td>{{ $job->job_location }}</td>
                            <td>{{ $job->salary }}</td>
                            <td>
                                {!! substr($job->job_responsibilities,0,100), strlen($job->job_responsibilities) > 100 ? "..read more" : "" !!}
                            </td>
                            <td>
                                {!! substr($job->educational,0,100), strlen($job->educational) > 100 ? "..read more" : "" !!}
                            </td>
                            <td>
                                {!! substr($job->skills,0,100), strlen($job->skills) > 100 ? "..read more" : "" !!}
                            </td>
                            <td>
                                {!! substr($job->compensation_and_others_benefits,0,100), strlen($job->compensation_and_others_benefits) > 100 ? "..read more" : "" !!}
                            </td>
                            <td>{{ $job->job_source }}</td>
                            <td>{{ $job->apply_email }}</td>
                            <td>{{ $job->published_date }}</td>
                            <td>{{ $job->application_deadline_date }}</td>
                            <td>
                                <a href="{{ route('edit-job', ['id' => $job->id]) }}" class="btn btn-outline-primary">Edit Job</a>
                                <br>

                                <form action="{{ route('delete-job') }}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ $job->id }}" name="job_id">
                                    <input type="submit" value="Delete Job" class="btn btn-outline-danger" onclick=" return confirm('Are you sure to delete this!')">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

