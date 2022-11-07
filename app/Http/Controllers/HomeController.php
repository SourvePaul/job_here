<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function addSlider() {
        return view('admin.slider.add-slider');
    }
    public function newSlider(Request $request) {
        $slider = new Slider();
        $slider->title =$request->title;
        $slider->contenti =$request->contenti;
        $slider->sImage =$this->saveImage($request);
        $slider->save();
        return back()->with('message', 'New Slider added successfully');
    }
    public function saveImage($request){
        $sImage=$request->file('sImage');
        $imageName=rand().'.'.$sImage->getClientOriginalExtension();
        $directory='AdminAsset/upload/slider-image/';
        $imgUrl=$directory.$imageName;
        $sImage->move($directory,$imageName);
        return $imgUrl;
    }
    public function manageSlider() {
        return view('admin.slider.manage-slider',[
            'sliders' => Slider::all()
        ]);
    }
    public function editSlider($id){
        return view('admin.slider.edit-slider',[
            'slider'=>Slider::find($id)
        ]);
    }
    public function updateSlider(Request $request){
        $slider = Slider::find($request->slider_id);
        $slider->title = $request->title;
        $slider->contenti = $request->contenti;
        if ($request->file('sImage')){
            unlink($slider->sImage);
            $slider->sImage =$this->saveImage($request);
        }
        $slider->save();
        return redirect('/manage-slider');
    }
    public function deleteSlider(Request $request){
        $slider = Slider::find($request->slider_id);
        unlink($slider->sImage);
        $slider->delete();
        return back();
    }
}
