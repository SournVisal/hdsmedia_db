@extends('frontend.viewfront.master')
@section('style')
    <link rel="stylesheet" href="{{asset('frontend/scss/main.css')}}">
@endsection
<style>
.footerNormal{
background-color: rgba(71,17,39,0.5) !important;
}
@media only screen and (max-width:768px){
.sliderWrapper .branding{
background-color: rgba(255,255,255,0.95) !important;
}
}
</style>
@section('content')
<div class="col-sm-12 col-md-12 col-lg-10 p-0 containerWrapper">
    <div class="slider">
        <div class="owl-carousel owl-theme mainSlider">
            @foreach($slider as $item)
                <div class="item">
                    <div class="__background-image bg" style="background-image: url({{URL('/photo',$item->path_name)}});">
                        <div class="innerSlider text-white d-flex align-items-center justify-content-center">
                            <div>
                                <h5 class="__text-shadow slide-caption__title text-uppercase text-center">{{$item->title}}</h5>
                                <p class="slide-caption__desc pt-3 text-center">{{$item->des}}</p>
                            </div>
                        </div>
                        {{--@for ($y = 0; $y < 4; $y++)--}}
                            {{--<div class="ellipse{{$y}}"></div>--}}
                        {{--@endfor--}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('frontend.include.footer')
</div>
@endsection