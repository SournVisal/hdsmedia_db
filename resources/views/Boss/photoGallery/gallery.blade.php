@extends('Boss.master')
@section('content')
@section('title','Gallery')
@section('style')
<link href="{{url('css/dataTables.bootstrap.min.css')}}">
<link href="{{url('css/fileinput.css')}}" rel="stylesheet">
@endsection
<h1>Gallery</h1>

<style>
    .dataTables_filter{
        float: right !important;
    }
</style>

<div class="row">
    <div class="col-md-12" style="background: #ffffff">

          {{--form insert data--}}
        <h4 style="text-align: center;font-weight: bold">Create Gallery</h4>
        <form role="form" action="{{url('/saveGallery')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            {{--category gallery--}}
            <div class="col-md-offset-2 form-group " style="width:70%;">
                <label for="exampleSelect1">Category Gallery</label>
                <select class="form-control" id="exampleSelect1" name="catgallery">
                    <option value="">--Please Select Your Category--</option>
                    @foreach($catgaller as $item)
                        <option value="{{$item -> id}}">{{$item->cat_name}}</option>
                    @endforeach
                </select>
                <strong style="color:red">{{ $errors->first('catgallery') }}</strong>
            </div>

            <div class="col-md-offset-2 form-group " style="width: 70%">
                <label>Photo Name</label>
                <input class="form-control" name="photoname" placeholder="Enter text" maxlength="200">
                {{--validation--}}
                <strong style="color:red">{{ $errors->first('photoname') }}</strong>
                {{--validation--}}
            </div>

             <div class=" col-md-offset-2 form-group" style="width: 70%">
                <label>Images</label>
                <input id="images" name="photo[]" type="file" multiple class="file-loading">
                @if(session()->has('fail'))
                    {{\Illuminate\Support\Facades\Session::get('fail')}}
                @endif
                {{--validation--}}
                {{--<strong style="color:red">{{ $errors->first('photo') }}</strong>--}}
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
                    <th>Gallery album</th>
                    <th>Gallery list</th>
                    <th>Images</th>
                    <!--<th>Descriptions</th>-->
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($galler as $item)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        <td>{{$albumname[$item->id]->cat_name}}</td>
                        <td>{{$item->photo_name}}</td>
                        <td><img src="{{URL('/photo',$item->path_name)}}" alt="" width='120' /></td>
                        <td>{{date('d M Y',strtotime($item->created_at))}}</td>
                        <td>
                            <a href="{{URL('/editGallery',$item->id)}}"><i class="fa fa-pencil-square" aria-hidden="true" ></i></a>&nbsp;
                            <a href="{{URL('/deleteGallery',$item->id)}}"><i class="fa fa-trash" aria-hidden="true" ></i></a>
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