@extends('admin.master')
@section('title')
    Job-Add
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4 fw-bold">NEW JOB FORM</h3></div>
                    <h5 style="color: #0c4128; text-align: center;">{{session('message')}}</h5>
                    <div class="card-body">
                        <form action="{{ route('new-job') }}" method="post" enctype="multipart/form-data">

                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-control" name="jobCategory_id">
                                            <option value=""> Select a Job Category</option>
                                            @foreach($jobCategories as $jobCategory)
                                                <option value="{{ $jobCategory->id }}"> {{ $jobCategory->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-control" name="company_id">
                                            <option value=""> Select a Company</option>
                                            @foreach($companies as $company)
                                                <option value="{{ $company->id }}"> {{ $company->company_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12 ">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputPosition" type="text" name="position" placeholder="Enter Job Position" />
                                        <label for="inputPosition">Position</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12 ">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputVacancy" type="text" name="vacancy" placeholder="Enter vacancy number" />
                                        <label for="inputVacancy">Vacancy</label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmploymentStatus" name="employment_status" type="text" placeholder="Enter a Employment Status" />
                                <label for="inputEmploymentStatus">Employment Status</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="editor" name="experience" > Experience... </textarea>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputAge" name="age" type="text" placeholder="Enter age" />
                                <label for="inputAge">Age</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputJobLocation" name="job_location" type="text" placeholder="Enter job location" />
                                <label for="inputJobLocation">Job Location</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputSalary" name="salary" type="text" placeholder="Enter salary" />
                                <label for="inputSalary">Salary</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="editor1" name="job_responsibilities" >Job Responsibilities...</textarea>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="editor2" name="educational" >Educational...</textarea>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="editor3" name="skills" >Skill's...</textarea>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="editor4" name="compensation_and_others_benefits" >Compensation and others benefits...</textarea>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputJobSource" name="job_source" type="text" placeholder="Enter job source" />
                                <label for="inputJobSource">Job Source</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputApplyEmail" name="apply_email" type="email" placeholder="Enter Email address for job apply" />
                                <label for="inputApplyEmail">Job Apply Email</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputPublishedDate" name="published_date" type="date" placeholder="Enter published date" />
                                <label for="inputPublishedDate">Published Date</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputApplicationDeadlineDate" name="application_deadline_date" type="date" />
                                <label for="inputApplicationDeadlineDate">Application deadline Date</label>
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" value="Save" class="form-control btn btn-outline-dark fw-bold">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
