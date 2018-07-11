@extends('frontend.viewfront.master')
@section('title',' Photo Gallery Detail')

@section('style')
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
@endsection

@section('content')
    <!--content-->
    <div class="col-sm-12 col-md-12 col-lg-10 p-0 containerWrapperApart gallery gallery-detail">
        <div class="pr-4 pl-4 pb-4 contentWrap">
            <h4 class="pt-3 pb-3 __border-bottom text-uppercase bg-white sticky-top">{{$name->cat_name}}</h4>
            <div class="row popup-gallery">
                @foreach($albumDetail as $item)
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <a href="{{url('/photo',$item->path_name)}}">
                            <div class="__background-image bg mt-3 mb-3"
                                 style="background-image: url({{url('/photo',$item->path_name)}})">
                                <span class="text-center text-white">{{$item->photo_name}}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
                {{--<div class="col-sm-12 col-md-6 col-lg-4">--}}
                {{--<a href="img/p12.jpeg">--}}
                {{--<div class="__background-image bg mt-3 mb-3" style="background-image: url({{url('frontend/img/p12.jpeg')}})">--}}
                {{--<span class="text-center text-white">Cambodia Beer Concert 2</span>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-sm-12 col-md-6 col-lg-4">--}}
                {{--<a href="img/p13.jpeg">--}}
                {{--<div class="__background-image bg mt-3 mb-3" style="background-image: url({{url('frontend/img/p13.jpeg')}})">--}}
                {{--<span class="text-center text-white">Cambodia Beer Concert 3</span>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-sm-12 col-md-6 col-lg-4">--}}
                {{--<a href="img/p14.jpeg">--}}
                {{--<div class="__background-image bg mt-3 mb-3" style="background-image: url({{url('frontend/img/p14.jpeg')}})">--}}
                {{--<span class="text-center text-white">Cambodia Beer Concert 4</span>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--</div>--}}
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="backWrapper __cursor-pointer">
                        <div class="mt-3 mb-3 bg-primary back d-flex align-items-center">
                            <div class="mx-auto">
                                <i class="fa fa-long-arrow-left fa-lg mr-2"></i>
                                <span class="text-center text-white">Back to</span>
                                <span class="d-block text-white">Photo Album</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.include.footer')
    </div>
@endsection
@section('script')
    <script src="{{url('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.popup-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                    titleSrc: function(item) {
                        return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                    }
                }
            });

            $(".backWrapper").click(function () {
                window.location.href = "{{url('/photoAlbum')}}";
            });
        });
    </script>
@endsection