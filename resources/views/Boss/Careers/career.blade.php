@extends('Boss.master')
@section('content')
@section('title','Careers')
@section('style')
    <link href="{{url('css/dataTables.bootstrap.min.css')}}">
    <link href="{{url('css/fileinput.css')}}" rel="stylesheet">
@endsection
<h1>Careers</h1>

<style>
    .dataTables_filter {
        float: right !important;
    }
</style>

<div class="row">
    <div class="col-md-12" style="background: #ffffff">

        {{--form insert data--}}
        <h4 style="text-align: center;font-weight: bold">Create Careers</h4>
        <form role="form" action="{{url('/saveCar')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
            <div class="col-md-offset-2 form-group col-md-6" style="width: 35%">
                <label>Career Title</label>
                <input class="form-control" name="title" type="text" placeholder="Enter Career title" maxlength="200">
                {{--validation--}}
                <strong style="color:red">{{ $errors->first('title') }}</strong>
                {{--validation--}}
            </div>
            <div class="form-group col-md-6" style="width: 35%">
                <label>Description</label>
                <input class="form-control" name="Description" type="text" placeholder="Enter Description" >
                {{--validation--}}
                <strong style="color:red">{{ $errors->first('Description') }}</strong>
                {{--validation--}}
            </div>
            </div>

            <div class="row">
            <div class="col-md-offset-2 form-group col-md-6" style="width: 35%">
                <label>Term</label>
                <input class="form-control" name="Term" type="text" placeholder="Enter term" maxlength="50">
                {{--validation--}}
                <strong style="color:red">{{ $errors->first('Term') }}</strong>
                {{--validation--}}
            </div>
            <div class="col-md-6 form-group " style="width: 35%">
                <label>Hiring</label>
                <input class="form-control" name="hiring" type="number" placeholder="Enter hiring" maxlength="11">
                {{--validation--}}
                <strong style="color:red">{{ $errors->first('hiring') }}</strong>
                {{--validation--}}
            </div>
            </div>

            <div class="row">
                <div class="col-md-offset-2 form-group col-md-6" style="width: 35%">
                    <label>Publish Date</label>
                    <input class="form-control" name="publishDate" type="date" maxlength="200">
                    {{--validation--}}
                    <strong style="color:red">{{ $errors->first('publishDate') }}</strong>
                    {{--validation--}}
                </div>
                <div class=" form-group col-md-6" style="width: 35%">
                    <label>Closing Date</label>
                    <input class="form-control" name="closeDate" type="date"  maxlength="200">
                    {{--validation--}}
                    <strong style="color:red">{{ $errors->first('closeDate') }}</strong>
                    {{--validation--}}
                </div>
            </div>

            <div class="row">
            <div class="col-md-offset-2 form-group col-md-6" style="width: 35%">
                <label>Qualification</label>
                <input class="form-control" name="qualification" type="text" placeholder="Enter Qualification">
                {{--validation--}}
                <strong style="color:red">{{ $errors->first('qualification') }}</strong>
                {{--validation--}}
            </div>
            <div class="col-md-6 form-group " style="width: 35%">
                <label>Year of Exp</label>
                <input class="form-control" name="year_exp" type="number" placeholder="Enter year of experience" maxlength="4">
                {{--validation--}}
                <strong style="color:red">{{ $errors->first('year_exp') }}</strong>
                {{--validation--}}
            </div>
            </div>

            <div class="row">
            <div class="col-md-offset-2 form-group col-md-6" style="width: 35%">
                <label>Salary</label>
                <input class="form-control" name="salary" type="text" placeholder="Enter Salary" maxlength="200">
                {{--validation--}}
                <strong style="color:red">{{ $errors->first('salary') }}</strong>
                {{--validation--}}
            </div>
            <div class="col-md-6 form-group " style="width: 35%">
                <label>Language</label>
                <input class="form-control" name="language" type="text" placeholder="Enter language" maxlength="100">
                {{--validation--}}
                <strong style="color:red">{{ $errors->first('language') }}</strong>
                {{--validation--}}
            </div>
            </div>

            <div class="row">
            <div class="col-md-offset-2 form-group col-md-6" style="width: 35%">
                <label>Contact</label>
                <input class="form-control" name="contact" type="text" placeholder="Contact people" maxlength="200">
                {{--validation--}}
                <strong style="color:red">{{ $errors->first('contact') }}</strong>
                {{--validation--}}
            </div>
            <div class="col-md-6 form-group " style="width: 35%">
                <label>Phone</label>
                <input class="form-control" name="phone"  placeholder="Enter your phone number" maxlength="200">
                {{--validation--}}
                <strong style="color:red">{{ $errors->first('phone') }}</strong>
                {{--validation--}}
            </div>
            </div>

            <div class="row">
            <div class="col-md-offset-2 form-group col-md-6" style="width: 35%">
                <label>Email</label>
                <input class="form-control" name="email" type="text" placeholder="Enter your email" maxlength="350">
                {{--validation--}}
                <strong style="color:red">{{ $errors->first('email') }}</strong>
                {{--validation--}}
            </div>
            <div class="col-md-6 form-group " style="width: 35%">
                <label>Address</label>
                <input class="form-control" name="address" type="text" placeholder="Enter your address" maxlength="200">
                {{--validation--}}
                <strong style="color:red">{{ $errors->first('address') }}</strong>
                {{--validation--}}
            </div>
            </div>

            <div class=" col-md-offset-2 form-group" style="width: 70%">
                <label>Images</label>
                <input id="images" name="photo" type="file" multiple class="file-loading">
                {{--validation--}}
                <strong style="color:red">{{ $errors->first('photo') }}</strong>
                {{--validation--}}
            </div>

            <button type="submit" class="col-md-offset-2 btn btn-primary">Save</button>
            <!-- <button type="reset" class="btn btn-default">Reset Button</button> -->
        </form>
        <hr>
        <br>
        {{--form insert data--}}


        <h4 style="text-align: center;font-weight: bold">Display Data</h4>
        {{--datatable--}}
        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>ID</th>
                {{--<th>Images</th>--}}
                <th>Career Title</th>
                <th>Publish Date</th>
                <!--<th>Descriptions</th>-->
                <th>Close Date</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($career as $item)
            <tr>
            <td>{{$loop->iteration }}</td>
            {{--<td><img src="{{URL('/photo',$item->car_photo)}}" alt="" width='120' /></td>--}}
            <td>{{$item->car_title}}</td>
            <td>{{$item->publish_date}}</td>
            <td>{{$item->closing_date}}</td>
            <td>
            <a href="{{URL('/editCareer',$item->id)}}"><i class="fa fa-pencil-square" aria-hidden="true" ></i></a>&nbsp;
            <a href="{{URL('/deleteCareer',$item->id)}}"><i class="fa fa-trash" aria-hidden="true" ></i></a>
            </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{--datatable--}}

    </div>

</div>
@endsection
@section('script')
    {{--<script src="//code.jquery.com/jquery-1.12.4.js"></script>--}}
    <script src="{{url('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#datatable').DataTable();
        });
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