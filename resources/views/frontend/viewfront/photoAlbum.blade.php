@extends('frontend.viewfront.master')
@section('title') Photo Gallery @endsection

@section('content')
    <!--content-->
    <div class="col-sm-12 col-md-12 col-lg-10 p-0 containerWrapperApart gallery">
        <div class="pr-4 pl-4 pb-4 contentWrap">
            <h4 class="pt-3 pb-3 __border-bottom text-uppercase bg-white sticky-top">Photos Gallery</h4>
            <div class="row">
                @foreach($album as $item)
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a class="menu {{ (Request::is('photoAlbum') ? 'class=active' : '') }}" href="{{url('photoDetail',$item->id)}}">
                        <div class="__background-image bg mt-3 mb-3" style="background-image: url({{url('/photo',$item->path_name)}})">
                            <span class="text-center text-white">{{$item->cat_name}}</span>
                        </div>
                    </a>
                </div>
                @endforeach
                {{--<div class="col-sm-12 col-md-6 col-lg-4">--}}
                    {{--<a href="#">--}}
                        {{--<div class="__background-image bg mt-3 mb-3" style="background-image: url({{url('frontend/img/p21.jpg')}})">--}}
                            {{--<span class="text-center text-white">Smart Mega Concert Press Conference</span>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            </div>
        </div>
        @include('frontend.include.footer')
    </div>
@endsection
