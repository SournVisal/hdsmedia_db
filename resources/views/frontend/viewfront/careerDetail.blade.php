@extends('frontend.viewfront.master')
@section('title') Career Detail @endsection

@section('content')
    <!--content-->
    <div class="col-sm-12 col-md-12 col-lg-10 p-0 containerWrapperApart career">
        <div class="pr-4 pl-4 pb-4 contentWrap">
            <h4 class="pt-3 pb-3 __border-bottom text-uppercase bg-white sticky-top">{{$careerDetail->car_title}}</h4>
            <div class="row">
                <!--info-->
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <!--summary infomation-->
                    <div class="summaryInfo mt-3 pb-3 __border-bottom">
                        <h5 class="text-primary">Summary Information</h5>
                        <!--wrapper-->
                        <div class="row mt-3">
                            <!--first col-->
                            <div class="col-sm-12 col-md-6 col-lg-6 __border-right">
                                <!--row item-->
                                <div class="row">
                                    <div class="col-5">
                                        <span class="text-muted">Term:</span>
                                    </div>
                                    <div class="col-7">
                                        <span>{{$careerDetail->term}}</span>
                                    </div>
                                </div>
                                <!--row item-->
                                <div class="row">
                                    <div class="col-5">
                                        <span class="text-muted">Hiring:</span>
                                    </div>
                                    <div class="col-7">
                                        <span>{{$careerDetail->hiring}}</span>
                                    </div>
                                </div>
                 
                                <!--row item-->
                                <div class="row">
                                    <div class="col-5">
                                        <span class="text-muted">Publish Date:</span>
                                    </div>
                                    <div class="col-7">
                                        <span>{{$careerDetail->publish_date}}</span>
                                    </div>
                                </div>
                                   <!--row item-->
                                <div class="row">
                                    <div class="col-5">
                                        <span class="text-muted">Qualification:</span>
                                    </div>
                                    <div class="col-7">
                                        <span>{{$careerDetail->qualification}}</span>
                                    </div>
                                </div>
                            </div>
                            <!--second col-->
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <!--row item-->
                                <div class="row">
                                    <div class="col-5">
                                        <span class="text-muted">Year of Exp:</span>
                                    </div>
                                    <div class="col-7">
                                        <span>{{$careerDetail->year_exp}}</span>
                                    </div>
                                </div>
                                <!--row item-->
                                <div class="row">
                                    <div class="col-5">
                                        <span class="text-muted">Salary:</span>
                                    </div>
                                    <div class="col-7">
                                        <span>{{$careerDetail->salary}}</span>
                                    </div>
                                </div>
                                <!--row item-->
                                <div class="row">
                                    <div class="col-5">
                                        <span class="text-muted">Language:</span>
                                    </div>
                                    <div class="col-7">
                                        <span>{{$careerDetail->language}}</span>
                                    </div>
                                </div>
                                <!--row item-->
                                <div class="row">
                                    <div class="col-5">
                                        <span class="text-muted">Closing Date:</span>
                                    </div>
                                    <div class="col-7">
                                        <span>{{$careerDetail->closing_date}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--desc-->
                    <div class="careerDesc mt-3 pb-3 __border-bottom">
                        <h5 class="text-primary">Description</h5>
                        <p class="mt-3">
                            {{$careerDetail->car_desc}}
                        </p>
                    </div>
                    <!--contact information-->
                    <div class="careerDesc mt-3">
                        <h5 class="text-primary mb-3">Contact Information</h5>
                        <!--row-->
                        <div class="row mt-2">
                            <div class="col-3">
                                <span class="text-muted">Contact:</span>
                            </div>
                            <div class="col-9">
                                <span>{{$careerDetail->contact}}</span>
                            </div>
                        </div>
                        <!--row-->
                        <div class="row mt-2">
                            <div class="col-3">
                                <span class="text-muted">Phone:</span>
                            </div>
                            <div class="col-9">
                                <span>{{$careerDetail->phone}}</span>
                            </div>
                        </div>
                        <!--row-->
                        <div class="row mt-2">
                            <div class="col-3">
                                <span class="text-muted">Email:</span>
                            </div>
                            <div class="col-9">
                                <span>{{$careerDetail->email}}</span>
                            </div>
                        </div>
                        <!--row-->
                        <div class="row mt-2">
                            <div class="col-3">
                                <span class="text-muted">Address:</span>
                            </div>
                            <div class="col-9">
                                <span>{{$careerDetail->address}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--apply cv-->
                <div class="col-sm-12 col-md-12 col-lg-3 mt-4 p-0">
                    <div class="rounded border" style="overflow: hidden">
                        <h5 class="bg-secondary p-3 m-0 text-white">Apply Now</h5>
                        <div class="bg-light p-3">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone number</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Upload CV</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Send Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.include.footer')
    </div>

@endsection