<?php

namespace App\Http\Controllers\Bossbackend;
use App\catGalleryModel;
use App\photoGalleryModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use File;

class photoGalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

//    view category photo gallery
    public function indexCat()
    {
        $catGallery = catGalleryModel::orderBy('id','desc')->get();
        return view('Boss.photoGallery.catGallery',['catGallery'=>$catGallery]);
    }
    //insert into db
    public function storeCat(Request $request)
    {
        //validate input
        $this->validate($request, [
            'catname' => 'required',
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $catGallery = new catGalleryModel();

        $catGallery->cat_name = $request->catname;
        //for show images
        $fileimg=$request->file('photo');
        if(!empty($fileimg)) {
            $name = md5($fileimg->getFilename() . time()) . '.' . $fileimg->getClientOriginalExtension();
            $img = Image::make($fileimg->path());
            //medium image
            $medium = '/photo/' . $name;
            $img->save(storage_path() . $medium);
            $catGallery->path_name = $name;
        }
        else{
            $catGallery->path_name = 'newsdefault.jpg';
        }

//        return 'hello';
        $catGallery->save();
        return redirect()->back();
    }

    ///edit cat Gallery
    public function editCatGallery($id)
    {
        $catGallery = catGalleryModel::find($id);
        return view('Boss.photoGallery.UpdateCatGallery',['catGallery'=>$catGallery]);
    }

    //update cate gallery
    public function updateCat(Request $request)
    {
        //validate input
        $this->validate($request, [
            'catname' => 'required',
        ]);

        $catGallery = catGalleryModel::find($request->catGalleryid);

        $catGallery->cat_name = $request->catname;
        //for show images
        $fileimg=$request->file('photo');
        if(!empty($fileimg)) {
            $name = md5($fileimg->getFilename() . time()) . '.' . $fileimg->getClientOriginalExtension();
            $img = Image::make($fileimg->path());
            //medium image
            $medium = '/photo/' . $name;
            $img->save(storage_path() . $medium);
            $catGallery->path_name = $name;
        }
//        else{
//            $mojo->path_name = 'newsdefault.jpg';
//        }

        $catGallery->save();
        return redirect('Boss/dashboard/catGallery');
    }
    //delete category Gallery
    public function destroyCat($id)
    {
        $filename =catGalleryModel::where('id',$id)->first();
        photoGalleryModel::where('catgallery_id',$id)->delete();
        catGalleryModel::destroy($id);
//                    storage path ->directory name -> filename in db ->colum name in db
        File::delete(storage_path("/photo/$filename->path_name"));
        return redirect()->back();
    }

    ///////////////////////**************************//////////////////////////

    //for gallery
    public function gallery()
    {
        $catgaller = catGalleryModel::all();
        $galler = photoGalleryModel::orderBy('id','desc')->get();
        $albumname = [];
        foreach ($galler as $ga)
        {
            $namecat = catGalleryModel::where('id',$ga->catgallery_id)->first();
            $albumname[$ga->id]=$namecat;
        }

        return view('Boss.photoGallery.gallery',['catgaller'=>$catgaller,
            'galler'=>$galler,
            'albumname'=>$albumname
        ]);
    }
    //insert to db
    public function storeGallery(Request $request)
    {
        $image_extension = ['jpeg','jpg','png','gif','svg'];
        //validate input
        $this->validate($request, [
            'catgallery' => 'required',
            'photoname' => 'required',
        ]);

        //for show images
        $fileimg=$request->file('photo');
        if(!empty($fileimg)) {
            foreach ($fileimg as $item){
                if(in_array($item->getClientOriginalExtension(),$image_extension)){
                $gallery = new photoGalleryModel();
                $gallery->catgallery_id = $request->catgallery;
                $gallery->photo_name = $request->photoname;

                $name = md5($item->getFilename() . time()) . '.' . $item->getClientOriginalExtension();
                $img = Image::make($item->path());
                //medium image
                $medium = '/photo/' . $name;
                $img->save(storage_path() . $medium);
                $gallery->path_name = $name;

                    $gallery->save();
                }
                else{
                    return back()->with('fail','Unknown File Extension');
                }

            }

        }
//        else{
//            $gallery->path_name = 'newsdefault.jpg';
//        }

        return redirect()->back();
    }

    //edit gallery
    public function editGallery($id)
    {
        $catgaller = catGalleryModel::all();
        $gallery = photoGalleryModel::find($id);
        return view('Boss.photoGallery.UpdateGallery',['gallery'=>$gallery,
            'catgaller'=>$catgaller
        ]);
    }

    //update gallery
    public function updateGallery(Request $request)
    {
        //validate input
        $this->validate($request, [
            'catgallery' => 'required',
            'photoname' => 'required',
//            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $gallery = photoGalleryModel::find($request->galleryid);

        $gallery->catgallery_id = $request->catgallery;
        $gallery->photo_name = $request->photoname;

        //for show images
        $fileimg=$request->file('photo');
        if(!empty($fileimg)) {
            $name = md5($fileimg->getFilename() . time()) . '.' . $fileimg->getClientOriginalExtension();
            $img = Image::make($fileimg->path());
            //medium image
            $medium = '/photo/' . $name;
            $img->save(storage_path() . $medium);
            $gallery->path_name = $name;
        }
//        else{
//            $gallery->path_name = 'newsdefault.jpg';
//        }

        $gallery->save();
        return redirect('Boss/dashboard/Gallery');
    }

    //for delete
    public function destroyGallery($id)
    {
        $filename =photoGalleryModel::where('id',$id)->first();
        photoGalleryModel::destroy($id);
        File::delete(storage_path("/photo/$filename->path_name"));
        return redirect()->back();
    }
}