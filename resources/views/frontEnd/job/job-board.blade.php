@extends('frontEnd.master')
@section('title')
    Job-Board
    @endsection
@section('content')
    <div class="breadcrumb-banner-area pt-94 pb-85 bg-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h2 class="text-center">Find a Job</h2>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center m-0">
                                <li><a href="{{route('/')}}">Home</a></li>
                                <li>Find a Job</li>
                            </ul>
                        </div>
                    </div>
                    <div class="job-search-content text-center brd-style">
                        <form action="#" method="post">
                            <div class="form-container">
                                <div class="box-select">
                                    <div class="select">
                                        <select name="category">
                                            <option>Keywords</option>
                                            <option>Finance</option>
                                            <option>Accountant</option>
                                            <option>Enginner</option>
                                            <option>Programmer</option>
                                            <option>Developer</option>
                                        </select>
                                    </div>
                                    <div class="select">
                                        <select name="date">
                                            <option>All Regions</option>
                                            <option>Dhaka</option>
                                            <option>Shylet</option>
                                            <option>Khulna</option>
                                            <option>Barishal</option>
                                            <option>Chittagong</option>
                                        </select>
                                    </div>
                                    <div class="select">
                                        <select name="date">
                                            <option>Category</option>
                                            <option>Web Design</option>
                                            <option>Designing</option>
                                            <option>Development</option>
                                            <option>Programming</option>
                                            <option>Developing</option>
                                        </select>
                                    </div>
                                    <div class="select">
                                        <button type="button">Search</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="job-post-area ptb-130 ptb-sm-60">
        <div class="container">
            <div class="all-job-post">
                <!-- Nav tabs -->
                <div class="post-tab nav">
                    <a class="nav-link" data-bs-toggle="tab" href="#featured">FEATURED JOBS</a>
                    <a class="nav-link" data-bs-toggle="tab" href="#recent_job">RECENT JOBS</a>
                    <a class="nav-link" data-bs-toggle="tab" href="#featured">PART TIME</a>
                    <a class="nav-link active" data-bs-toggle="tab" href="#recent_job">FULL TIME</a>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane" id="featured">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAssets')}}/images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Online English Teachers</h6>
                                        <p>Publisher : Company Name</p>
                                        <p>In : Teacher</p>
                                        <p>Date : 14.05.2018</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane active" id="recent_job">
                        <div class="row">
                            @php $i=1
                            @endphp
                            @foreach($jobs as $job)
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset( $job->cImage )}}" alt="company_logo" style="height: 55px; width: 55px;" title="#job-1-caption{{$i++}}">
                                    </div>
                                    <div id="job-1-caption{{$i++}}" class="address">
                                        <h6>{{ $job->position }}</h6>
                                        <p>Publisher : {{ $job->company_name }}</p>
                                        <p>In : {{ $job->category_name }}</p>
                                        <p>Last Date: {{ $job->application_deadline_date }}</p>
                                        <p>Location: {{ $job->job_location }}</p>
                                    </div>
                                    <div class="button-box">
                                        <a href="{{route('job-details',['id'=>$job->id])}}" class="button button-black">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
