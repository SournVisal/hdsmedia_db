@extends('Boss.master')
@section('content')
@section('title','Update Slider')
@section('style')
<link href="{{url('css/dataTables.bootstrap.min.css')}}">
<link href="{{url('css/fileinput.css')}}" rel="stylesheet">
@endsection
<h1>Careers</h1>


<div class="row">
    <div class="col-md-12" style="background: #ffffff">

          {{--form insert data--}}
        <h4 style="text-align: center;font-weight: bold">Update Slide</h4>
        <form role="form" action="{{url('/updateCareer')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                    <input type="hidden" value="{{$career->id}}" name="careerid">

            <div class="row">
                <div class="col-md-offset-2 form-group col-md-6" style="width: 35%">
                    <label>Career Title</label>
                    <input class="form-control" name="title" type="text" placeholder="Enter Career title"
                           value="{{$career->car_title}}">
                    {{--validation--}}
                    <strong style="color:red">{{ $errors->first('title') }}</strong>
                    {{--validation--}}
                </div>
                <div class="form-group col-md-6" style="width: 35%">
                    <label>Description</label>
                    <input class="form-control" name="Description" type="text" placeholder="Enter Description"
                           value="{{$career->car_desc}}">
                    {{--validation--}}
                    <strong style="color:red">{{ $errors->first('Description') }}</strong>
                    {{--validation--}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-2 form-group col-md-6" style="width: 35%">
                    <label>Term</label>
                    <input class="form-control" name="Term" type="text" placeholder="Enter term"
                           value="{{$career->term}}">
                    {{--validation--}}
                    <strong style="color:red">{{ $errors->first('Term') }}</strong>
                    {{--validation--}}
                </div>
                <div class="col-md-6 form-group " style="width: 35%">
                    <label>Hiring</label>
                    <input class="form-control" name="hiring" type="number" placeholder="Enter hiring"
                           value="{{$career->hiring}}">
                    {{--validation--}}
                    <strong style="color:red">{{ $errors->first('hiring') }}</strong>
                    {{--validation--}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-2 form-group col-md-6" style="width: 35%">
                    <label>Publish Date</label>
                    <input class="form-control" name="publishDate" type="date"
                           value="{{$career->publish_date}}">
                    {{--validation--}}
                    <strong style="color:red">{{ $errors->first('publishDate') }}</strong>
                    {{--validation--}}
                </div>
                <div class=" form-group col-md-6" style="width: 35%">
                    <label>Closing Date</label>
                    <input class="form-control" name="closeDate" type="date"
                           value="{{$career->closing_date}}">
                    {{--validation--}}
                    <strong style="color:red">{{ $errors->first('closeDate') }}</strong>
                    {{--validation--}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-2 form-group col-md-6" style="width: 35%">
                    <label>Qualification</label>
                    <input class="form-control" name="qualification" type="text" placeholder="Enter Qualification"
                           value="{{$career->qualification}}">
                    {{--validation--}}
                    <strong style="color:red">{{ $errors->first('qualification') }}</strong>
                    {{--validation--}}
                </div>
                <div class="col-md-6 form-group " style="width: 35%">
                    <label>Year of Exp</label>
                    <input class="form-control" name="year_exp" type="number" placeholder="Enter year of experience"
                           value="{{$career->year_exp}}">
                    {{--validation--}}
                    <strong style="color:red">{{ $errors->first('year_exp') }}</strong>
                    {{--validation--}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-2 form-group col-md-6" style="width: 35%">
                    <label>Salary</label>
                    <input class="form-control" name="salary" type="text" placeholder="Enter Salary" maxlength="200"
                           value="{{$career->salary}}">
                    {{--validation--}}
                    <strong style="color:red">{{ $errors->first('salary') }}</strong>
                    {{--validation--}}
                </div>
                <div class="col-md-6 form-group " style="width: 35%">
                    <label>Language</label>
                    <input class="form-control" name="language" type="text" placeholder="Enter language" maxlength="100"
                           value="{{$career->language}}">
                    {{--validation--}}
                    <strong style="color:red">{{ $errors->first('language') }}</strong>
                    {{--validation--}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-2 form-group col-md-6" style="width: 35%">
                    <label>Contact</label>
                    <input class="form-control" name="contact" type="text" placeholder="Contact people" maxlength="200"
                           value="{{$career->contact}}">
                    {{--validation--}}
                    <strong style="color:red">{{ $errors->first('contact') }}</strong>
                    {{--validation--}}
                </div>
                <div class="col-md-6 form-group " style="width: 35%">
                    <label>Phone</label>
                    <input class="form-control" name="phone"  placeholder="Enter your phone number" maxlength="200"
                           value="{{$career->phone}}">
                    {{--validation--}}
                    <strong style="color:red">{{ $errors->first('phone') }}</strong>
                    {{--validation--}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-2 form-group col-md-6" style="width: 35%">
                    <label>Email</label>
                    <input class="form-control" name="email" type="text" placeholder="Enter your email" maxlength="200"
                           value="{{$career->email}}">
                    {{--validation--}}
                    <strong style="color:red">{{ $errors->first('email') }}</strong>
                    {{--validation--}}
                </div>
                <div class="col-md-6 form-group " style="width: 35%">
                    <label>Address</label>
                    <input class="form-control" name="address" type="text" placeholder="Enter your address" maxlength="200"
                           value="{{$career->address}}">
                    {{--validation--}}
                    <strong style="color:red">{{ $errors->first('address') }}</strong>
                    {{--validation--}}
                </div>
            </div>

            <div class=" col-md-offset-2 form-group" style="width: 70%">
                <label>Images</label>
                <input type="hidden" value="{{$career->car_photo}}" name="oldName"/>
                <input id="images" name="photo" type="file" multiple class="file-loading">

                @if($career->car_photo !='')
                    <div class="form-group wrap-photo">
                        <img src="{{URL('/photo',$career->car_photo)}}" id="oldphoto" width="80%">
                        <i class="fa fa-times deletephoto"></i>
                    </div>
                @endif

                {{--validation--}}
                {{--<strong style="color:red">{{ $errors->first('companyname') }}</strong>--}}
                {{--validation--}}
            </div>

            <button type="submit" class="col-md-offset-2 btn btn-primary" >Save</button>
            <!-- <button type="reset" class="btn btn-default">Reset Button</button> -->
        </form>
        <hr>
        <br>
          {{--form insert data--}}
    </div>

</div>
@endsection
@section('script')
{{--<script src="//code.jquery.com/jquery-1.12.4.js"></script>--}}
<script src="{{url('js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('js/dataTables.bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    } );
</script>


{{--for img input file--}}
<script src="{{URL::asset('js/fileinput.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script>
    $("#images").fileinput({
        showUpload: false,
        layoutTemplates: {
            main1: "{preview}\n" +
            "<div class=\'input-group {class}\'>\n" +
            "   <div class=\'input-group-btn\'>\n" +
            "       {browse}\n" +
            "       {upload}\n" +
            "       {remove}\n" +
            "   </div>\n" +
            "   {caption}\n" +
            "</div>"
        }
    });
</script>
{{--for img input file--}}
@endsection