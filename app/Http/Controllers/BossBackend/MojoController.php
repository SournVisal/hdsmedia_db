<?php

namespace App\Http\Controllers\BossBackend;
use App\MojoModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use File;

class MojoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //view Team Mojo
    public function Mojo()
    {
        $mojo = MojoModel::orderBy('id','desc')->get();
        return view('Boss.Mojo.Mojo',['mojo'=>$mojo]);
    }
    //save image to database
    public function saveMojo(Request $request)
    {
        //validate input
        $this->validate($request, [
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $mojo = new MojoModel();
        //        model -> field Table and request field input name
        //for show images
        $fileimg=$request->file('photo');
        if(!empty($fileimg)) {
            $name = md5($fileimg->getFilename() . time()) . '.' . $fileimg->getClientOriginalExtension();
            $img = Image::make($fileimg->path());
            //medium image
            $medium = '/photo/' . $name;
            $img->save(storage_path() . $medium);
            $mojo->path_name = $name;
        }
        else{
            $mojo->path_name = 'newsdefault.jpg';
        }
        $mojo->save();
        return redirect()->back();
    }
    //for edit image team mojo
    public function editMojo($id)
    {
        $mojo = MojoModel::find($id);
        return view('Boss.Mojo.UpdateMojo',['mojo'=>$mojo]);
    }

    //update image team mojo
    public function updateMojo(Request $request)
    {
        //validate input
        $this->validate($request, [
//            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $mojo = MojoModel::find($request->mojoid);
        //        model -> field Table and request field input name
        //for show images
        $fileimg=$request->file('photo');
        if(!empty($fileimg)) {
            $name = md5($fileimg->getFilename() . time()) . '.' . $fileimg->getClientOriginalExtension();
            $img = Image::make($fileimg->path());
            //medium image
            $medium = '/photo/' . $name;
            $img->save(storage_path() . $medium);
            $mojo->path_name = $name;
        }
//        else{
//            $mojo->path_name = 'newsdefault.jpg';
//        }
        $mojo->save();
        return redirect('/Boss/dashboard/Mojo');
    }

    //for delete image Team mojo
    public function destroyMojo($id)
    {
        $filename =MojoModel::where('id',$id)->first();
        MojoModel::destroy($id);
        File::delete(storage_path("/photo/$filename->path_name"));
        return redirect()->back();
    }
}
