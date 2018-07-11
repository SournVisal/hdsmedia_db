<?php

namespace App\Http\Controllers\BossBackend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\OurTeamModel;
use App\imgOurteamModel;
use File;
class OurTeamController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = OurTeamModel::orderBy('id','desc')->get();
        return view('Boss.OurTeam.ourTeam',['team'=>$team]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate input
        $this->validate($request, [
            'name' => 'required',
            'position' => 'required',
            'email' =>'required',
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);
        $teamcount = OurTeamModel::count();

//        return $teamcount;

        if ($teamcount < 10 ){

            $team = new OurTeamModel();
            //        model -> field Table and request field input name
            $team->name = $request-> name;
            $team->position	 = $request-> position;
            $team->email = $request-> email;

            //for show images
            $fileimg=$request->file('photo');
            if(!empty($fileimg)) {
                $name = md5($fileimg->getFilename() . time()) . '.' . $fileimg->getClientOriginalExtension();
                $img = Image::make($fileimg->path());
                //medium image
                $medium = '/photo/' . $name;
                $img->save(storage_path() . $medium);
                $team->image = $name;
            }
            else{
                $team->image = 'newsdefault.jpg';
            }

            $team->save();
            return redirect()->back();
        }
        return redirect()->back()->with('message', "Member is limit 10");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = OurTeamModel::find($id);
        return view('Boss.OurTeam.UpdateTeam',['team'=>$team]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //validate input
        $this->validate($request, [
            'name' => 'required',
            'position' => 'required',
            'email' =>'required',
//            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $team = OurTeamModel::find($request->teamid);
        //        model -> field Table and request field input name
        $team->name = $request-> name;
        $team->position	 = $request-> position;
        $team->email = $request-> email;

        //for show images
        $fileimg=$request->file('photo');
        if(!empty($fileimg)) {
            $name = md5($fileimg->getFilename() . time()) . '.' . $fileimg->getClientOriginalExtension();
            $img = Image::make($fileimg->path());
            //medium image
            $medium = '/photo/' . $name;
            $img->save(storage_path() . $medium);
            $team->image = $name;
        }
//        else{
//            $team->image = 'newsdefault.jpg';
//        }

        $team->save();
        return redirect('Boss/dashboard/ourTeam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filename =OurTeamModel::where('id',$id)->first();
        OurTeamModel::destroy($id);
        File::delete(storage_path("/photo/$filename->image"));
        return redirect()->back();

    }

    //for image our team
    public function indexImg()
    {
        $imageTeam = imgOurteamModel::orderBy('id','desc')->get();
        return view('Boss.OurTeam.imgOurTeam',['imageTeam'=>$imageTeam]);
    }

    //inert to db
    public function storeImg(Request $request)
    {
        //validate input
        $this->validate($request, [
            'imgTeam' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $imageTeam = new imgOurteamModel();
        //        model -> field Table and request field input name
        //for show images
        $fileimg=$request->file('imgTeam');
        if(!empty($fileimg)) {
            $name = md5($fileimg->getFilename() . time()) . '.' . $fileimg->getClientOriginalExtension();
            $img = Image::make($fileimg->path());
            //medium image
            $medium = '/photo/' . $name;
            $img->save(storage_path() . $medium);
            $imageTeam->path_name = $name;
        }
        else{
            $imageTeam->path_name = 'newsdefault.jpg';
        }

        $imageTeam->save();
        return redirect()->back();
    }

    //edit image team
    public function editImg($id)
    {
        $imageTeam = imgOurteamModel::find($id);
        return view('Boss.OurTeam.UpdateImg',['imageTeam'=>$imageTeam]);
    }

    //update
    public function updateImg(Request $request)
    {
        //validate input
        $this->validate($request, [
//            'imgTeam' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $imageTeam = imgOurteamModel::find($request->imageid);
        //        model -> field Table and request field input name
        //for show images
        $fileimg=$request->file('imgTeam');
        if(!empty($fileimg)) {
            $name = md5($fileimg->getFilename() . time()) . '.' . $fileimg->getClientOriginalExtension();
            $img = Image::make($fileimg->path());
            //medium image
            $medium = '/photo/' . $name;
            $img->save(storage_path() . $medium);
            $imageTeam->path_name = $name;
        }
//        else{
//            $imageTeam->path_name = 'newsdefault.jpg';
//        }

        $imageTeam->save();
        return redirect('Boss/dashboard/imgOurTeam');
    }
//delete image
    public function destroyImg($id)
    {
        $filename =imgOurteamModel::where('id',$id)->first();
        imgOurteamModel::destroy($id);
        File::delete(storage_path("/photo/$filename->path_name"));
        return redirect()->back();
    }
}

