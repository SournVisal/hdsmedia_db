@extends('frontend.viewfront.master')
@section('title') Our Team @endsection

@section('content')
    <style>
        .contentWrap{
            padding-bottom: 0 !important;
        }
    </style>

    <!--content-->
    <div class="col-sm-12 col-md-12 col-lg-10 p-0 containerWrapperApart team">
        <div class="pr-4 pl-4 pb-4 contentWrap">
            <h4 class="pt-3 pb-3 __border-bottom text-uppercase bg-white sticky-top">Our Team</h4>
            <div class="row pl-3 pr-3 teamRow mt-4">
                <div class="w-100">
                    <h2 class="text-primary font-weight-bold mb-1 text-center w-100">TALENTED and PASSIONATE</h2>
                    <p class="mb-0 text-center w-75 mx-auto font-italic text-primary">We know that when we enjoy what we do, we are in turn delivering exceptional service to our partners.
                        <br> To make this happen, we are group of individuals that share one core values.</p>
                </div>
                <a href="{{url('/teamMember')}}" class="btn btn-primary btn-sm mx-auto mt-3">View member detail</a>

                <section class="teamItemsWrapper">
                    @foreach($ourTeam as $item)
                        <img src="{{URL('/photo',$item->path_name)}}" alt="" width='100%' />
                    @endforeach
                </section>
            </div>
        </div>
        @include('frontend.include.footer')
    </div>
@endsection
