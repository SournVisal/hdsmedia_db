@extends('frontend.viewfront.master')

@section('title') Member Detail @endsection

@section('content')
    <!--content-->
    <div class="col-sm-12 col-md-12 col-lg-10 p-0 containerWrapperApart teamMember">
        <div class="pr-4 pl-4 pb-4 contentWrap">
            <h4 class="pt-3 pb-3 __border-bottom text-uppercase bg-white sticky-top">All Team Members</h4>
            <div class="row">
                <!--////////////////////////-->
                @foreach($ourmember as $item)
                <div class="col-sm-12 col-md-6 col-lg-3 mb-3 teamMemberItem">
                    <div class="__background-image bg mt-3 mb-3 rounded" style="background-image: url({{url('frontend/img/team-bg.jpg')}})">
                        <img class="imgProfile" width="150px" height="150px" src="{{url('/photo',$item->image)}}" alt="">
                    </div>
                    <div class="teamDetail text-nowrap">
                        <span class="d-block __font-size-15"><i class="fa fa-user mr-3"></i><strong class="text-primary">{{$item->name}}</strong></span>
                        <span class="d-block __font-size-14"><i class="fa fa-globe mr-3"></i>{{$item->position}}</span>
                        <span class="d-block __font-size-14"><i class="fa fa-envelope mr-3"></i>{{$item->email}}</span>
                    </div>
                </div>
                @endforeach
                {{--<!--////////////////////////-->--}}
                {{--<div class="col-sm-12 col-md-6 col-lg-3 mb-3 teamMemberItem">--}}
                    {{--<div class="__background-image bg mt-3 mb-3 rounded" style="background-image: url({{url('frontend/img/team-bg.jpg')}})">--}}
                        {{--<img class="imgProfile" width="150px" height="150px" src="{{url('frontend/img/2.GM-Dariya.png')}}" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="teamDetail text-nowrap">--}}
                        {{--<span class="d-block __font-size-15"><i class="fa fa-user mr-3"></i><strong class="text-primary">DARIYA HENG</strong></>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-globe mr-3"></i>General Manager</>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-envelope mr-3"></i>Dariya.h@hdsmediagroup.com</>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--////////////////////////-->--}}
                {{--<div class="col-sm-12 col-md-6 col-lg-3 mb-3 teamMemberItem">--}}
                    {{--<div class="__background-image bg mt-3 mb-3 rounded" style="background-image: url({{url('frontend/img/team-bg.jpg')}})">--}}
                        {{--<img class="imgProfile" width="150px" height="150px" src="{{url('frontend/img/3.Choeu.png')}}" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="teamDetail text-nowrap">--}}
                        {{--<span class="d-block __font-size-15"><i class="fa fa-user mr-3"></i><strong class="text-primary">CHOEU SRIN</strong></>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-globe mr-3"></i>Sales Director</>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-envelope mr-3"></i>Choeu.s@hdsmediagroup.com</>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--////////////////////////-->--}}
                {{--<div class="col-sm-12 col-md-6 col-lg-3 mb-3 teamMemberItem">--}}
                    {{--<div class="__background-image bg mt-3 mb-3 rounded" style="background-image: url({{url('frontend/img/team-bg.jpg')}})">--}}
                        {{--<img class="imgProfile" width="150px" height="150px" src="{{url('frontend/img/4.Sophannary.png')}}" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="teamDetail text-nowrap">--}}
                        {{--<span class="d-block __font-size-15"><i class="fa fa-user mr-3"></i><strong class="text-primary">SOPHANNARY KHAM</strong></>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-globe mr-3"></i>Head Finance and Admin</>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-envelope mr-3"></i>Sophannary.k@hdsmediagroup.com</>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--////////////////////////-->--}}
                {{--<div class="col-sm-12 col-md-6 col-lg-3 mb-3 teamMemberItem">--}}
                    {{--<div class="__background-image bg mt-3 mb-3 rounded" style="background-image: url({{url('frontend/img/team-bg.jpg')}})">--}}
                        {{--<img class="imgProfile" width="150px" height="150px" src="{{url('frontend/img/5.Rathny.png')}}" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="teamDetail text-nowrap">--}}
                        {{--<span class="d-block __font-size-15"><i class="fa fa-user mr-3"></i><strong class="text-primary">RATHNY ROS SOPHEA</strong></>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-globe mr-3"></i>Operations Director</>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-envelope mr-3"></i>Rathny.r@hdsmediagroup.com</>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--////////////////////////-->--}}
                {{--<div class="col-sm-12 col-md-6 col-lg-3 mb-3 teamMemberItem">--}}
                    {{--<div class="__background-image bg mt-3 mb-3 rounded" style="background-image: url({{url('frontend/img/team-bg.jpg')}})">--}}
                        {{--<img class="imgProfile" width="150px" height="150px" src="{{url('frontend/img/6.Khemara.png')}}" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="teamDetail text-nowrap">--}}
                        {{--<span class="d-block __font-size-15"><i class="fa fa-user mr-3"></i><strong class="text-primary">KHEMARA YIN</strong></>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-globe mr-3"></i>Event Director</>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-envelope mr-3"></i>Khemara.y@hdsmediagroup.com</>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--////////////////////////-->--}}
                {{--<div class="col-sm-12 col-md-6 col-lg-3 mb-3 teamMemberItem">--}}
                    {{--<div class="__background-image bg mt-3 mb-3 rounded" style="background-image: url({{url('frontend/img/team-bg.jpg')}})">--}}
                        {{--<img class="imgProfile" width="150px" height="150px" src="{{url('frontend/img/7.Carlos.png')}}" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="teamDetail text-nowrap">--}}
                        {{--<span class="d-block __font-size-15"><i class="fa fa-user mr-3"></i><strong class="text-primary">CARLOS PHILIP GATDULA IV</strong></>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-globe mr-3"></i>Account Director – Special Projects</>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-envelope mr-3"></i>Gatdula.c@hdsmediagroup.com</>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--////////////////////////-->--}}
                {{--<div class="col-sm-12 col-md-6 col-lg-3 mb-3 teamMemberItem">--}}
                    {{--<div class="__background-image bg mt-3 mb-3 rounded" style="background-image: url({{url('frontend/img/team-bg.jpg')}})">--}}
                        {{--<img class="imgProfile" width="150px" height="150px" src="{{url('frontend/img/8.Kokchhay.png')}}" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="teamDetail text-nowrap">--}}
                        {{--<span class="d-block __font-size-15"><i class="fa fa-user mr-3"></i><strong class="text-primary">KOKCHHAY POU</strong></>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-globe mr-3"></i>Media Director</>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-envelope mr-3"></i>Kokchhay.p@hdsmediagroup.com</>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--////////////////////////-->--}}
                {{--<div class="col-sm-12 col-md-6 col-lg-3 mb-3 teamMemberItem">--}}
                    {{--<div class="__background-image bg mt-3 mb-3 rounded" style="background-image: url({{url('frontend/img/team-bg.jpg')}})">--}}
                        {{--<img class="imgProfile" width="150px" height="150px" src="{{url('frontend/img/9.Daniel.png')}}" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="teamDetail text-nowrap">--}}
                        {{--<span class="d-block __font-size-15"><i class="fa fa-user mr-3"></i><strong class="text-primary">DANIEL DESEMBRANA</strong></>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-globe mr-3"></i>Creative Director</>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-envelope mr-3"></i>Desembrana.d@hdsmediagroup.com</>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--////////////////////////-->--}}
                {{--<div class="col-sm-12 col-md-6 col-lg-3 mb-3 teamMemberItem">--}}
                    {{--<div class="__background-image bg mt-3 mb-3 rounded" style="background-image: url({{url('frontend/img/team-bg.jpg')}})">--}}
                        {{--<img class="imgProfile" width="150px" height="150px" src="{{url('frontend/img/10.Sreyna.png')}}" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="teamDetail text-nowrap">--}}
                        {{--<span class="d-block __font-size-15"><i class="fa fa-user mr-3"></i><strong class="text-primary">SREYNA MA</strong></>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-globe mr-3"></i>Event Manager</>--}}
                        {{--<span class="d-block __font-size-14"><i class="fa fa-envelope mr-3"></i>Sreyna.m@hdsmediagroup.com</>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
        @include('frontend.include.footer')
    </div>
@endsection