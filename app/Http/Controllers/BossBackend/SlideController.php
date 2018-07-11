<?php

namespace App\Http\Controllers\BossBackend;
use App\SlideModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use File;

class SlideController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}

    public function slider()
    {
        $slide = SlideModel::orderBy('id','desc')->get();
        return view('Boss.Slider.slider',['slide'=> $slide]);
    }

    public function saveSlide(Request $request)
    {
        //validate input
        $this->validate($request, [
            'title' => 'required',
//            'Description' => 'required',
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $slide = new SlideModel();
        //        model -> field Table and request field input name
        $slide->title = $request-> title;
        $slide->des = $request-> Description;

        //for show images
        $fileimg=$request->file('photo');
        if(!empty($fileimg)) {
            $name = md5($fileimg->getFilename() . time()) . '.' . $fileimg->getClientOriginalExtension();
            $img = Image::make($fileimg->path());
            //medium image
            $medium = '/photo/' . $name;
            $img->save(storage_path() . $medium);
            $slide->path_name = $name;
        }
        else{
            $slide->path_name = 'newsdefault.jpg';
        }

        $slide->save();
        return redirect()->back();
    }

    //for edit data
    public function editSlide($id)
    {
        $slide = SlideModel::find($id);
        return view('Boss.Slider.UpdateSlider',['slide'=> $slide]);
    }

    //update slider
    public function updateSlide(Request $request)
    {
//        validate input
        $this->validate($request, [
            'title' => 'required',
//            'Description' => 'required',
//            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $slide = SlideModel::find($request->slideid);
        //        model -> field Table and request field input name
        $slide->title = $request-> title;
        $slide->des = $request-> Description;

        //for show images
        $fileimg=$request->file('photo');
        if(!empty($fileimg)) {
            $name = md5($fileimg->getFilename() . time()) . '.' . $fileimg->getClientOriginalExtension();
            $img = Image::make($fileimg->path());
            //medium image
            $medium = '/photo/' . $name;
            $img->save(storage_path() . $medium);
            $slide->path_name = $name;
        }
//        else{
//
//            $slide->path_name=$request->oldName;
//        }

        $slide->save();
        return redirect('Boss/dashboard/slider');
    }

    //for delete slide
    public function destroySlide($id)
    {
        $filename =SlideModel::where('id',$id)->first();
        SlideModel::destroy($id);
        File::delete(storage_path("/photo/$filename->path_name"));
        return redirect()->back();
    }

}
