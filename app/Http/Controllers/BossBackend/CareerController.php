<?php

namespace App\Http\Controllers\BossBackend;
use App\CareerModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use File;
class CareerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //view
    public function index()
    {
        $career = CareerModel::orderBy('id','desc')->get();
        return view('Boss.Careers.career',['career'=>$career]);
    }

    //insert to db
    public function storeCar(Request $request)
    {
        //validate input
        $this->validate($request, [
            'title' => 'required',
            'Description' => 'required',
            'Term' => 'required',
            'hiring' => 'required',
            'publishDate' => 'required',
            'closeDate' => 'required',
            'qualification' => 'required',
            //'year_exp' => 'required',
            'salary' => 'required',
            'language' => 'required',
            'contact' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $career = new CareerModel();
        //        model -> field Table and request field input name
        $career->car_title = $request->title;
        $career->car_desc = $request->Description;
        $career->term = $request->Term;
        $career->hiring = $request->hiring;
        $career->qualification = $request->qualification;
        $career->publish_date = $request->publishDate;
        $career->year_exp = $request->year_exp;
        $career->salary = $request->salary;
        $career->language = $request->language;
        $career->closing_date = $request->closeDate;
        $career->contact = $request->contact;
        $career->phone = $request->phone;
        $career->email = $request->email;
        $career->address = $request->address;

        //for show images
        $fileimg=$request->file('photo');
        if(!empty($fileimg)) {
            $name = md5($fileimg->getFilename() . time()) . '.' . $fileimg->getClientOriginalExtension();
            $img = Image::make($fileimg->path());
            //medium image
            $medium = '/photo/' . $name;
            $img->save(storage_path() . $medium);
            $career->car_photo = $name;
        }
        else{
            $career->car_photo = 'newsdefault.jpg';
        }

        $career->save();
        return redirect()->back();
    }

    //for edit
    public function editCareer($id)
    {
        $career = CareerModel::find($id);
        return view('Boss.Careers.UpdateCareer',['career'=>$career]);
    }
    //update career
    public function updateCareer(Request $request)
    {
        //validate input
        $this->validate($request, [
            'title' => 'required',
            'Description' => 'required',
            'Term' => 'required',
            'hiring' => 'required',
            'publishDate' => 'required',
            'closeDate' => 'required',
            'qualification' => 'required',
            //'year_exp' => 'required',
            'salary' => 'required',
            'language' => 'required',
            'contact' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
//            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $career = CareerModel::find($request->careerid);
        //        model -> field Table and request field input name
        $career->car_title = $request->title;
        $career->car_desc = $request->Description;
        $career->term = $request->Term;
        $career->hiring = $request->hiring;
        $career->qualification = $request->qualification;
        $career->publish_date = $request->publishDate;
        $career->year_exp = $request->year_exp;
        $career->salary = $request->salary;
        $career->language = $request->language;
        $career->closing_date = $request->closeDate;
        $career->contact = $request->contact;
        $career->phone = $request->phone;
        $career->email = $request->email;
        $career->address = $request->address;

        //for show images
        $fileimg=$request->file('photo');
        if(!empty($fileimg)) {
            $name = md5($fileimg->getFilename() . time()) . '.' . $fileimg->getClientOriginalExtension();
            $img = Image::make($fileimg->path());
            //medium image
            $medium = '/photo/' . $name;
            $img->save(storage_path() . $medium);
            $career->car_photo = $name;
        }
//        else{
//            $career->car_photo = 'newsdefault.jpg';
//        }

        $career->save();
        return redirect('Boss/dashboard/Careers');
    }
    //for delete career
    public function destroyCareer($id)
    {
        $filename =CareerModel::where('id',$id)->first();
        CareerModel::destroy($id);
        File::delete(storage_path("/photo/$filename->car_photo"));
        return redirect()->back();
    }
}