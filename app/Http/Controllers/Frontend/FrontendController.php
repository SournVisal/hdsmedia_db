<?php

namespace App\Http\Controllers\Frontend;

use App\photoGalleryModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MojoModel;
use App\SlideModel;
use App\CareerModel;
use App\catGalleryModel;
use App\imgOurteamModel;
use App\OurTeamModel;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //for show slider in home page
    public function showSlider()
    {
         $slider = SlideModel::all();
        if ($slider){
            return view('frontend.viewfront.slider',['slider'=>$slider]);
        }
        else{
            return view('errors.404');
        }
    }

    public function index()
    {
        return view('frontend.viewfront.about');
    }
    //for service
    public function service()
    {
        return view('frontend.viewfront.service');
    }
    //for our Team
    public function ourTeam()
    {
        $ourTeam = imgOurteamModel::orderBy('id','desc')->get();
        if ($ourTeam){
            return view('frontend.viewfront.ourTeam',['ourTeam'=>$ourTeam]);
        }
        else{
            return view('errors.404');
        }
    }
    //for our Team member
    public function memberTeam()
    {
        $ourmember = OurTeamModel::all();
        if ($ourmember){
            return view('frontend.viewfront.teamMember',['ourmember'=>$ourmember]);
        }
        else{
            return view('errors.404');
        }
    }
    //for career
    public function career()
    {
        $career = CareerModel::orderBy('id','desc')->get();
        if ($career){
            return view('frontend.viewfront.career',['career'=>$career]);
        }
        else{
            return view('errors.404');
        }
    }
    //for career detail
    public function careerDetail($id)
    {
        $careerDetail = CareerModel::find($id);
        if ($careerDetail){
            return view('frontend.viewfront.careerDetail',['careerDetail'=>$careerDetail]);
        }
        else{
            return view('errors.404');
        }
    }

    //for photo gallery
    public function photoAlbum()
    {
         $album = catGalleryModel::orderBy('id','desc')->get();
        if($album){
            return view('frontend.viewfront.photoAlbum',['album'=>$album]);
        }
        else{
            return view('errors.404');
        }
    }
    //for photo gallery detail
    public function photoDetail($id)
    {
        $name = catGalleryModel::where('id',$id)->first();
        $albumDetail = photoGalleryModel::where('catgallery_id',$id)->get();
        if ($albumDetail && $name){
            return view('frontend.viewfront.photoDetail',['albumDetail'=>$albumDetail,
                'name'=>$name
            ]);
        }
        else{
            return view('errors.404');
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teammojo()
    {
        $mojo = MojoModel::orderBy('id','desc')->limit(6)->get();
        if ($mojo){
            return view('frontend.viewfront.teamMojo',['mojo'=>$mojo]);
        }
        else{
            return view('errors.404');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}