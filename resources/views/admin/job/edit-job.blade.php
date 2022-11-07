@extends('admin.master')
@section('title')
    Edit-Job
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Job Form</h3></div>
                    <div class="card-body">
                        <form action="{{ route('update-job') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $job->id }}" name="job_id">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-control" name="jobCategory_id">
                                            <option value=""> Select a Job Category </option>
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
{{--                                            <option value="{{ $job->company_id }}"> {{$job->company_name }}</option>--}}
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
                                        <input class="form-control" id="inputPosition" value="{{ $job->position }}" type="text" name="position" />
                                        <label for="inputPosition">Position</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12 ">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputVacancy" value="{{ $job->vacancy }}" type="text" name="vacancy" />
                                        <label for="inputVacancy">Vacancy</label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmploymentStatus" value="{{ $job->employment_status }}" name="employment_status" type="text"  />
                                <label for="inputEmploymentStatus">Employment Status</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="editor" name="experience" > {{ $job->experience }} </textarea>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputAge" name="age" value="{{ $job->age }}" type="text" />
                                <label for="inputAge">Age</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputJobLocation" name="job_location" value="{{ $job->job_location }}" type="text" />
                                <label for="inputJobLocation">Job Location</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputSalary" name="salary" value="{{ $job->salary }}" type="text" />
                                <label for="inputSalary">Salary</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="editor1" name="job_responsibilities" > {{ $job->job_responsibilities }} </textarea>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="editor2" name="educational" > {{ $job->educational }} </textarea>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="editor3" name="skills" > {{ $job->skills }} </textarea>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="editor4" name="compensation_and_others_benefits" > {{ $job->compensation_and_others_benefits }} </textarea>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputJobSource" name="job_source" type="text" value="{{ $job->job_source }}" />
                                <label for="inputJobSource">Job Source</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputApplyEmail" name="apply_email" type="text" value="{{ $job->apply_email }}" />
                                <label for="inputApplyEmail">Job Apply Email</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputPublishedDate" name="published_date" type="date" value="{{ $job->published_date }}" />
                                <label for="inputPublishedDate">Published Date</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputApplicationDeadlineDate" name="application_deadline_date" type="date" value="{{ $job->application_deadline_date }}" />
                                <label for="inputApplicationDeadlineDate">Application deadline Date</label>
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
