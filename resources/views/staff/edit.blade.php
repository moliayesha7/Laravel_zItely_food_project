@extends('layouts.app')

@section('page-title')
Edit Staff

@endsection


@section('main-content')


<div class="col-sm-8">
    <section class="panel panel-default">
      
        <div class="panel-body">
            <form class="bs-example form-horizontal" action="{{action('StaffManagement@update',$edit->id)}}" method="POST">
            @csrf
                <input type="hidden" name="_method" value="PUT" /> 
            
            <div class="form-group">
                    <label class="col-sm-2 control-label">Staff Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"name="name" value="{{$edit->name}}" >
                    </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-2 control-label">Staff Job Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"name="job_title" value="{{$edit->job_title}}" >
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


               
                <div class="form-group">
                    <div class="col-lg-offset-6 col-lg-6">
                        <button type="submit" class="btn btn-sm btn-default"><center>Update</center></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>


@endsection