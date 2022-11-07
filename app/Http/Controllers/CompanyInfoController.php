<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyInfoController extends Controller
{
    public $company;
    public function index() {
        return view('admin.company.add-company');
    }
    public function addCompany(Request $request) {
       $company = new Company();
       $company->company_name = $request->company_name;
       $company->cImage = $this->saveImage($request);
       $company->address = $request->address;
       $company->save();
       return back()->with('message','Company Added Successfully');
    }
    public function saveImage($request) {
        $cImage=$request->file('cImage');
        $imageName=rand().'.'.$cImage->getClientOriginalExtension();
        $directory='AdminAsset/upload/company-image/';
        $imgUrl=$directory.$imageName;
        $cImage->move($directory,$imageName);
        return $imgUrl;
    }
    public function manageCompany() {
        return view('admin.company.manage-company',[
            'companies' => Company::all()
        ]);
    }
    public function statusCompany($id) {
        $company = Company::find($id);
        if ($company->status==1){
            $company->status=0;
            $company->save();
            return back();
        }
        else{
            $company->status=1;
            $company->save();
            return back();
        }
    }
    public function editCompany($id){
        return view('admin.company.edit-company',[
            'company' => Company::find($id)
        ]);
    }
    public function updateCompany(Request $request){
        $company = Company::find($request->company_id);
        $company->company_name = $request->company_name;
        if ($request->file('cImage')){
            unlink($company->cImage);
            $company->cImage = $this->saveImage($request);
        }
        $company->address = $request->address;
        $company->save();
        return redirect('/manage-company');
    }
    public function deleteCompany(Request $request){
        $company = Company::find($request->company_id);
        unlink($company->cImage);
        $company->delete();
        return back();
    }
}
