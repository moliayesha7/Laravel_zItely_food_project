@extends('layouts.app')

@section('page-title')
Add New Staff

@endsection


@section('main-content')

<div class="col-md-12">

@if($errors->any())
<p class="alert alert-danger">{{$errors->first()}} <button class="close" data-dismiss="alert">&times;</button></p>

@endif

@if(Session::has('message'))

<p class="alert alert-success">{{Session::get('message')}} <button class="close" data-dismiss="alert">&times;</button></p>

@endif

<section class="panel panel-default">

    <div class="panel-body">
        <form class="form-horizontal" action="{{action('StaffManagement@store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="input-id-1">Staff Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" id="input-id-1"> </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="input-id-1">Staff Job Title</label>
                <div class="col-sm-10">
                    <input type="text" name="job_title" value="{{old('job_title')}}" class="form-control" id="input-id-1"> </div>
            </div>
           

            <div class="line line-dashed b-b line-lg pull-in"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Staff Photo</label>
                <div class="col-sm-10">
                    <input type="file" name="photo"  class="filestyle" data-icon="false" data-classbutton="btn btn-default" data-classinput="form-control inline v-middle input-s" id="filestyle-0" style="position: fixed; left: -500px;">
                    <div class="bootstrap-filestyle" style="display: inline;">
                        <input type="text" class="form-control inline v-middle input-s" disabled="">
                        <label for="filestyle-0" class="btn btn-default"><span>Choose file</span></label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="input-id-1">Facebook URL</label>
                <div class="col-sm-10">
                    <input type="text" name="fb" value="{{old('fb')}}" class="form-control" id="input-id-1"> </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="input-id-1">Twitter URL</label>
                <div class="col-sm-10">
                    <input type="text" name="twitter" value="{{old('twitter')}}" class="form-control" id="input-id-1"> </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="input-id-1">Linkdin URL</label>
                <div class="col-sm-10">
                    <input type="text" name="linkdin" value="{{old('linkdin')}}" class="form-control" id="input-id-1"> </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="input-id-1">Instagram URL</label>
                <div class="col-sm-10">
                    <input type="text" name="ins" value="{{old('ins')}}" class="form-control" id="input-id-1"> </div>
            </div>
           
           
            <div class="line line-dashed b-b line-lg pull-in"></div>
            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Published</button>
                </div>
            </div>
        </form>
    </div>
</section>
</div>
@endsection