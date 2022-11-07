<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{

    public $job;
    public function index() {
        return view('admin.job.add-job',[
            'jobCategories' => JobCategory::where('status',1)
                ->orderby('id','desc')
                ->get(),
            'companies' => Company::where('status',1)
                ->orderby('id','desc')
                ->get(),
        ]);
    }
    public function saveJob(Request $request) {
            $job = new Job();
        $job->jobCategory_id = $request->jobCategory_id;
        $job->company_id = $request->company_id;
        $job->position = $request->position;
        $job->vacancy = $request->vacancy;
        $job->employment_status = $request->employment_status;
        $job->experience = $request->experience;
        $job->age = $request->age;
        $job->job_location = $request->job_location;
        $job->salary = $request->salary;
        $job->job_responsibilities = $request->job_responsibilities;
        $job->educational = $request->educational;
        $job->skills = $request->skills;
        $job->compensation_and_others_benefits = $request->compensation_and_others_benefits;
        $job->job_source = $this->makeJobSource($request);
        $job->apply_email = $request->apply_email;
        $job->published_date = $request->published_date;
        $job->application_deadline_date = $request->application_deadline_date;
        $job->save();
        return back()->with('message','New Job Added Successfully');
    }
    public function makeJobSource($request) {
        if ($request->job_source) {
            $str = $request->job_source;
            return preg_replace('/\s+/u','-',trim($str));
        }
        $str = $request->employment_status;
        return preg_replace('/\s+/u','-',trim($str));
    }
    public function manageJob() {
        $jobs = DB::table('jobs')
            ->join('job_categories','jobs.jobCategory_id','job_categories.id')
            ->join('companies','jobs.company_id','companies.id')
            ->select('jobs.*','job_categories.category_name','companies.company_name')
            ->orderBy('id','desc')
            ->get();
        return view('admin.job.manage-job',[
            'jobs' => $jobs
        ]);
    }
    public function editJob($id) {
        return view('admin.job.edit-job',[
            'job' => Job::find($id),

            'jobCategories' => JobCategory::where('status',1)
                ->orderby('id','desc')
                ->get(),
            'companies' => Company::where('status',1)
                ->orderby('id','desc')
                ->get(),
        ]);
    }
    public function updateJob(Request $request) {
        $job = Job::find($request->job_id);
        $job->jobCategory_id = $request->jobCategory_id;
        $job->company_id = $request->company_id;
        $job->position = $request->position;
        $job->vacancy = $request->vacancy;
        $job->employment_status = $request->employment_status;
        $job->experience = $request->experience;
        $job->age = $request->age;
        $job->job_location = $request->job_location;
        $job->salary = $request->salary;
        $job->job_responsibilities = $request->job_responsibilities;
        $job->educational = $request->educational;
        $job->skills = $request->skills;
        $job->compensation_and_others_benefits = $request->compensation_and_others_benefits;
        $job->job_source = $this->makeJobSource($request);
        $job->apply_email = $request->apply_email;
        $job->published_date = $request->published_date;
        $job->application_deadline_date = $request->application_deadline_date;
        $job->save();
        return redirect('/manage-job');
    }
    public function deleteJob(Request $request){
        $job = Job::find($request->job_id);
        $job->delete();
        return back();
    }

}
