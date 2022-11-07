<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    public $jobCategories;
    public  function addJobCategory() {
        return view('admin.job.add-job-category');
    }
    public  function newJobCategory(Request $request) {
        $jobCategories = new JobCategory();
        $jobCategories->category_name =$request->category_name;
        $jobCategories->save();
        return back()->with('message', 'New Job Category added successfully');
    }
    public function manageJobCategory() {
        return view('admin.job.manage-job-category',[
             'jobCategories'=> JobCategory::all()
        ]);
    }
    public function statusJobCategory($id){
        $jobCategory = JobCategory::find($id);
        if($jobCategory->status==1){
            $jobCategory->status=0;
            $jobCategory->save();
            return back();
        }else{
            $jobCategory->status=1;
            $jobCategory->save();
            return back();
        }
    }
    public function editJobCategory($id){
        return view('admin.job.edit-job-category',[
            'jobCategory' => JobCategory::find($id)
        ]);
    }
    public function updateJobCategory(Request $request){
        $jobCategory = JobCategory::find($request->jobCategory_id);
        $jobCategory->category_name = $request->category_name;
        $jobCategory->save();
        return redirect('/manage-job-category');
    }
    public function deleteJobCategory(Request $request){
        $jobCategory = JobCategory::find($request->jobCategory_id);
        $jobCategory->delete();
        return back();
    }
}
