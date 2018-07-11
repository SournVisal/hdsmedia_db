@extends('Boss.master')
@section('content')
@section('title','Update Gallery')
@section('style')
<link href="{{url('css/dataTables.bootstrap.min.css')}}">
<link href="{{url('css/fileinput.css')}}" rel="stylesheet">
@endsection
<h1>Photo Gallery</h1>


<div class="row">
    <div class="col-md-12" style="background: #ffffff">

          {{--form insert data--}}
        <h4 style="text-align: center;font-weight: bold">Update Gallery</h4>
        <form role="form" action="{{url('/updateGallery')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                    <input type="hidden" value="{{$gallery->id}}" name="galleryid">

            <div class="col-md-offset-2 form-group " style="width:70%;">
                <label for="exampleSelect1">Category Gallery</label>
                <select class="form-control" id="exampleSelect1" name="catgallery">
                    @foreach($catgaller as $item)
                        @if($gallery->catgallery_id==$item->id)
                        <option value="{{$item -> id}}" >{{$item->cat_name}}</option>
                        {{--<option value="{{$item -> id}}">{{$item->cat_name}}</option>--}}
                        @endif
                    @endforeach
                </select>
                <strong style="color:red">{{ $errors->first('catgallery') }}</strong>
            </div>

            <div class="col-md-offset-2 form-group " style="width: 70%">
                <label>Photo Name</label>
                <input class="form-control" name="photoname" placeholder="Enter text" maxlength="200"
                       value="{{$gallery->photo_name}}">
                {{--validation--}}
                <strong style="color:red">{{ $errors->first('photoname') }}</strong>
                {{--validation--}}
            </div>

            <div class=" col-md-offset-2 form-group" style="width: 70%">
                <label>Images</label>
                <input type="hidden" value="{{$gallery->path_name}}" name="oldName"/>
                <input id="images" name="photo" type="file" multiple class="file-loading">

                @if($gallery->path_name !='')
                    <div class="form-group wrap-photo">
                        <img src="{{URL('/photo',$gallery->path_name)}}" id="oldphoto" width="100%">
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