@extends('frontend.viewfront.master')
@section('title') Career @endsection

@section('content')
    <!--content-->
    <div class="col-sm-12 col-md-12 col-lg-10 p-0 containerWrapperApart career">
        <div class="pr-4 pl-4 pb-4 contentWrap">
            <h4 class="pt-3 pb-3 __border-bottom text-uppercase bg-white sticky-top">Careers</h4>
            <div class="__background-image bg mt-3 100vh" style="background-image: url({{url('frontend/img/career.jpg')}}); height: 100vh;">
                <div class="container">
                <!-- <div class="container __background-image bg mt-3 100vh" style="background-image: url({{url('frontend/img/career.jpg')}}); height: 100vh;"> -->
                    <div class="row">
                        @foreach($career as $item)
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <a class="menu {{ (Request::is('photoAlbum') ? 'class=active' : '') }}" href="{{url('/careerDetail',$item->id)}}">
                                <div class="container p-3 border mt-3 careerItem">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-2 col-lg-2 d-flex justify-content-center careerIcon">
                                            <span class="icon-media __font-size-56 text-primary"></span>
                                        </div>
                                        <div class="col-sm-12 col-md-10 col-lg-10 careerCaption">
                                            <h5 class="text-dark" style="    margin-top: -5px;">{{$item->car_title}}</h5>
                                            <div class="text-dark" style="    margin-top: -5px;">
                                                <span class="mr-3">Start: {{$item->publish_date}}</span>
                                                <span>End: {{$item->closing_date}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.include.footer')
    </div>
@endsection
