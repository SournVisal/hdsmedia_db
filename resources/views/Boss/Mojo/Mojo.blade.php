@extends('Boss.master')
@section('content')
@section('title','Team Mojo')
@section('style')
<link href="{{url('css/dataTables.bootstrap.min.css')}}">
<link href="{{url('css/fileinput.css')}}" rel="stylesheet">
@endsection
<h1>Team Mojo</h1>

<style>
    .dataTables_filter{
        float: right !important;
    }
</style>

<div class="row">
    <div class="col-md-12" style="background: #ffffff">

          {{--form insert data--}}
        <h4 style="text-align: center;font-weight: bold">Create Team Mojo</h4>
        <form role="form" action="{{url('/saveMojo')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class=" col-md-offset-2 form-group" style="width: 70%;">
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
                    <th>Images</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($mojo as $item)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        <td><img src="{{URL('/photo',$item->path_name)}}" alt="" width='120' /></td>
                        <td>{{date('d M Y',strtotime($item->created_at))}}</td>
                        <td>
                            <a href="{{URL('/editeMojo',$item->id)}}"><i class="fa fa-pencil-square" aria-hidden="true" ></i></a>&nbsp;
                            <a href="{{URL('/deletMojo',$item->id)}}"><i class="fa fa-trash" aria-hidden="true" ></i></a>
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