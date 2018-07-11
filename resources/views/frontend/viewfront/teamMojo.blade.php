@extends('frontend.viewfront.master')
@section('title') Team Mojo @endsection

@section('content')
    <style>
        h1,h2,h3,h4,h5,h6{
            line-height: 1.2;
        }
    </style>
    <!--content-->
        <div class="col-sm-12 col-md-12 col-lg-10 p-0 containerWrapperApart teamMojo">
            <div class="p-4 contentWrap">
                <h3 class="pt-3 pb-3 __border-bottom text-uppercase">Our Mojo</h3>
                <div class="row">
                    <!--promise-->
                    <div class="col-sm-12 col-md-6 col-lg-6 mt-3 mb-3 promise">
                        <div class="w-100 bg bgTextWrap rounded border">
                            <div class="bgText w-75">
                                <h4 class="text-uppercase text-primary">Promise</h4>
                                <h5 class="text-primary">Giving the best service, and committed in helping and supporting each other.</h5>
                            </div>
                        </div>
                    </div>
                    <!--intelligent-->
                    <div class="col-sm-12 col-md-6 col-lg-6 mt-3 mb-3 intelligent">
                        <div class="w-100 bg bgTextWrap rounded border">
                            <div class="bgText w-75">
                                <h4 class="text-uppercase text-primary">Intelligent</h4>
                                <h5 class="text-primary">We strive to find the right answer to client's challenges.</h5>
                            </div>
                        </div>
                    </div>
                    <!--passion-->
                    <div class="col-sm-12 col-md-6 col-lg-3 mt-3 mb-3 passion">
                        <div class="w-100 bg bgTextWrap rounded border">
                            <div class="bgText w-75">
                                <h4 class="text-uppercase text-primary">Passion</h4>
                                <h5 class="text-primary">We love what we do, we have fun in what we do.</h5>
                            </div>
                        </div>
                    </div>
                    <!--expert-->
                    <div class="col-sm-12 col-md-6 col-lg-3 mt-3 mb-3 expert">
                        <div class="w-100 bg bgTextWrap rounded border">
                            <div class="bgText w-75">
                                <h4 class="text-uppercase text-primary">Expert</h4>
                                <h5 class="text-primary">Experienced and disciplined practitioners in the field.</h5>
                            </div>
                        </div>
                    </div>
                    <!--photos for teammojo-->
                    <?php
                        $num = 0;
                    ?>
                    @foreach($mojo as $item)
                    <div class="col-sm-12 col-md-6 col-lg-3 mt-3 mb-3 mojoImg<?=$num++?>">

                            <div class="__background-image bg rounded" style="background-image: url({{URL('/photo',$item->path_name)}})"></div>

                    </div>
                    @endforeach
                </div>
            </div>
            @include('frontend.include.footer')
        </div>
@endsection

