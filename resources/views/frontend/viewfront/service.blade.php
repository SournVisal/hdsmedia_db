@extends('frontend.viewfront.master')
@section('title') Service @endsection

@section('content')
            <!--content-->
            <div class="col-sm-12 col-md-12 col-lg-10 p-0 containerWrapperApart services">
                <div class="pr-4 pl-4 pb-4 contentWrap">
                    <h4 class="pt-3 pb-3 __border-bottom text-uppercase bg-white sticky-top">Our Services</h4>
                    <!-- media planning & buying-->
                    <div class="row mt-4 m-0 __background-light-gray">
                        <!--photo-->
                        <div class="col-sm-12 col-md-12 col-lg-4 pl-0 servicePhoto">
                            <div class="__background-image bg" style="background-image: url({{url('frontend/img/4.jpg')}})"></div>
                            <div class="rounded-circle mainService p-3 text-center text-white d-flex align-items-center __media-buying">
                                <h4>Media Planning & Buying</h4>
                            </div>
                        </div>
                        <!--info-->
                        <div class="col-sm-12 col-md-12 col-lg-7 serviceInfoWrapper ml-auto">
                            <div class="serviceInfo row h-100">
                                <div class="col-6 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-television fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">TV</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-volume-up fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Radio</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-print fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Print</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-circle-o-notch fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">OOH</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-podcast fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Online/Digital</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-product-hunt fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">PR</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blt activities-->
                    <div class="row mt-4 m-0 __background-light-gray">
                        <div class="col-sm-12 col-md-12 col-lg-4 pl-0 servicePhoto">
                            <div class="__background-image bg" style="background-image: url({{url('frontend/img/2.jpg')}})"></div>
                            <div class="rounded-circle mainService p-3 text-center text-white d-flex align-items-center __blt">
                                <h4>BTL Activities</h4>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-7 serviceInfoWrapper ml-auto">
                            <div class="serviceInfo row h-100">
                                <div class="col-6 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-unlock fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Activation</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-calendar-o fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Event</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-music fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Concert</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-bullhorn fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Buzz Maketing</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-eercast fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Branding</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- media monitoring-->
                    <div class="row mt-4 m-0 __background-light-gray">
                        <div class="col-sm-12 col-md-12 col-lg-4 pl-0 servicePhoto">
                            <div class="__background-image bg" style="background-image: url({{url('frontend/img/5.jpg')}})"></div>
                            <div class="rounded-circle mainService p-3 text-center text-white d-flex align-items-center __monitoring">
                                <h4>Media Monitoring</h4>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-7 serviceInfoWrapper ml-auto">
                            <div class="serviceInfo row h-100">
                                <div class="col-sm-12 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-window-maximize fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Media Consumption</h6>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-star fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">TV Program Rating</h6>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-video-camera fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Media Monitoring</h6>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-file-excel-o fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Competitor Spending Report</h6>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-bell-o fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Competitor Alert Report</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Planning & Strategy-->
                    <div class="row mt-4 m-0 __background-light-gray">
                        <div class="col-sm-12 col-md-12 col-lg-4 pl-0 servicePhoto">
                            <div class="__background-image bg" style="background-image: url({{url('frontend/img/6.jpg')}})"></div>
                            <div class="rounded-circle mainService p-3 text-center text-white d-flex align-items-center __planning-strategy">
                                <h4>Planning & Strategy</h4>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-7 serviceInfoWrapper ml-auto">
                            <div class="serviceInfo row h-100">
                                <div class="col-sm-12 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-comment fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">IMC</h6>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-handshake-o fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Communication Plan</h6>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-bandcamp fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Brand Strategy</h6>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-search-plus fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Research</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- creative service-->
                    <div class="row mt-4 m-0 __background-light-gray">
                        <div class="col-sm-12 col-md-12 col-lg-4 pl-0 servicePhoto">
                            <div class="__background-image bg" style="background-image: url({{url('frontend/img/1.jpg')}})"></div>
                            <div class="rounded-circle mainService p-3 text-center text-white d-flex align-items-center __creative">
                                <h4>Creative Services</h4>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-7 serviceInfoWrapper ml-auto">
                            <div class="serviceInfo row h-100">
                                <div class="col-sm-12 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-cubes fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Concept Designs</h6>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-cogs fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Creative Communication</h6>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 align-items-center d-flex justify-content-center">
                                    <div class="item text-center">
                                        <i class="fa fa-child fa-2x mb-3 text-primary"></i>
                                        <h6 class="mb-1">Production</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('frontend.include.footer')
            </div>
@endsection
