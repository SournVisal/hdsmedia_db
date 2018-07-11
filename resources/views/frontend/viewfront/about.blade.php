@extends('frontend.viewfront.master')
@section('title') About @endsection

@section('content')
            <!--content-->
            <div class="col-sm-12 col-md-12 col-lg-10 p-0 containerWrapperApart about">
                <div class="p-4 contentWrap">
                    <h3 class="pt-3 pb-3 __border-bottom text-uppercase">Our Story</h3>
                    <div class="row">
                        <div class="col-12 mt-3">
                            <div class="owl-carousel owl-theme aboutSlider">
                                <?php for ($x = 0; $x < 4; $x++) { ?>
                                <div class="item">
                                    <div class="__background-image bg" style="background-image: url({{url('frontend/img/about1.jpg')}})">
                                        <div class="text-white innerSlider">
                                            <p class="pt-3 text-primary">HD&S Media Group is a B2B agency that specializes in strategic and creative communications. Reliable partner in media planning and buying, event and activation management, marketing and research to gain an unfair share of consumers' minds and build stronger, more resilient brand.</p>
                                            <p class="text-primary">We pride ourselves in great work ethic, integrity, and end-results. Throughout the years we strive to look for the right answers to bring results and grow the business of our clients.</p>
                                            <blockquote class="blockquote">
                                                <i class="mb-0 text-primary">“Years of fruitful service to our partners and clients, <br>and, WE’VE ONLY JUST BEGUN"</i>
                                            </blockquote>
                                            <div class="directorName text-right text-primary">
                                                <span class="text-uppercase d-block font-weight-bold">Mr. Sothea heng</span>
                                                <span class="__font-size-14">Managing Director</span>
                                            </div>
                                        </div>
                                        <div class="w-50 ml-auto pt-5 aboutPhoto">
                                            <img src="{{url('frontend/img/MD-Sothea-about.png')}}" alt="" class="w-50 mx-auto">
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                @include('frontend.include.footer')
            </div>
@endsection