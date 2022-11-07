<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\Slider;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    public function index() {
        return view('frontEnd.home.home',[
           'sliders' => Slider::all(),
            'jobCategories' => JobCategory::where('status',1)
                ->orderby('id','desc')
                ->take(6)
                ->get()
        ]);
    }
    public function jobBoard() {
        $jobs = DB::table('jobs')
            ->join('job_categories','jobs.jobCategory_id','job_categories.id')
            ->join('companies','jobs.company_id','companies.id')
            ->select('jobs.*','job_categories.category_name','companies.company_name','companies.cImage')
            ->orderBy('id','desc')
            ->get();
        return view('frontEnd.job.job-board',[
            'jobs' => $jobs
        ]);
    }
    public function singleJob() {
        return view('frontEnd.job.single-job');
    }
    public function jobDetails($id) {
//        $jobs = DB::table('jobs')
//            ->join('job_categories','jobs.jobCategory_id','job_categories.id')
//            ->join('companies','jobs.company_id','companies.id')
//            ->select('jobs.*','job_categories.category_name','companies.company_name','companies.cImage')
//            ->find($id)
//            ->get();
        return view('frontEnd.job.job-details',[
//            'job' => $jobs
           'job' => Job::find($id)
        ]);
    }
    public function about() {
        return view('frontEnd.home.about');
    }
    public function contact() {
        return view('frontEnd.home.contact');
    }
    public function blog() {
        return view('frontEnd.blog.blog');
    }
    public function blogDetails() {
        return view('frontEnd.blog.blog-details');
    }
}
