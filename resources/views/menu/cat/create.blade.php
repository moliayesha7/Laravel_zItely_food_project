@extends('layouts.app')

@section('page-title')
Add New Menu Category

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
        <form class="form-horizontal" action="{{action('MenuCatManagement@store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="input-id-1">Category Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" id="input-id-1"> </div>
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