@extends('frontEnd.master')
@section('title')
    Job Details
@endsection
@section('content')
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area pt-94 pb-85 bg-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h2 class="text-center">Job Details</h2>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center m-0">
                                <li><a href="{{route('/')}}">Home</a></li>
                                <li>Job Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Start of Single Job Post Area-->
    <div class="single-job-post-area ptb-130 ptb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="#">
                        <div class="single-job-content">
                            <div class="area-title">
                                <div class="single-job-post">
                                    <div class="img-icon">
{{--                                        <img src="{{asset('frontEndAssets')}}/images/company-logo/1.png" alt="">--}}
                                        <img src="{{asset( $job->cImage )}}" alt="company_logo" style="height: 55px; width: 55px;" >
                                    </div>
                                    <div class="address">
                                        <h6>{{$job->position}}</h6>
                                        <p>Publisher : {{ $job->company_name }}</p>
                                        <p>In : {{$job->category_name}}</p>
                                        <p>Employment Status : {{$job->employment_status}}</p>
                                        <p>Salary : {{$job->salary}}</p>
                                        <p>Last Date : {{ \Carbon\Carbon::parse($job->application_deadline_date)->format('d-M-Y') }}</p>
                                        <p>Location : {{ $job->job_location }}</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>
                                </div>
                            </div>
                            <div class="title"><span>Job Responsibilities</span></div>
                            <div class="single-job-form mb-14">
                                <p style=""> {!! $job->job_responsibilities  !!} </p>
                            </div>

                            <div class="title"><span>Educational Requirements</span></div>
                            <div class="single-job-form">
                                <p style=""> {!! $job->educational  !!} </p>
                            </div>

                            <div class="title"><span> Experience Requirements </span></div>
                            <div class="single-job-form">
                                <p style=""> {!! $job->experience  !!} </p>
                            </div>

                            <div class="title"><span>job Requirements</span></div>
                            <div class="single-job-form">
                                <div class="single-info mb-14">
                                    <span class="number block"> {!! $job->skills !!} </span>
                                </div>
                            </div>

                            <div class="title"><span>Compensation & Other Benefits</span></div>
                            <div class="single-job-form">
                                <div class="single-info mb-14">
                                    <span> {!! $job->compensation_and_others_benefits !!} </span>
                                    {{--                                    class="mark-icon block pl-27"--}}
                                </div>
                            </div>

                            <div class="title"><span>  Source </span></div>
                            <div class="single-job-form">
                                <p style=""> {!! $job->job_source  !!} </p>
                            </div>

                            <div class="title"><span>how to apply</span></div>
                            <div class="single-job-form">
                                <p>
                                    Send your CV to <b style="color: red;">{{ $job->apply_email }}</b> or to Email your CV from MY JOB-HERE account.<br>
                                    Application Deadline : {{ \Carbon\Carbon::parse($job->application_deadline_date)->format('d M Y') }}
                                </p>
                            </div>
                            <div class="buttonback">
                                <a href="{{ route('/') }}" class="button button-large-box lg-btn mr-20">back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End of Single Job Post Area-->
@endsection
