@extends('layouts.app')

@section('page-title')
Edit Menu 

@endsection


@section('main-content')


<div class="col-sm-8">
    <section class="panel panel-default">
      
        <div class="panel-body">
            <form class="bs-example form-horizontal" action="{{action('MenuManagement@update',$edit->id)}}" method="POST">
            @csrf
                <input type="hidden" name="_method" value="PUT" /> 
            
            <div class="form-group">
                    <label class="col-lg-4 control-label">Menu Name</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control"name="name" value="{{$edit->name}}" >
                    </div>
            </div>
            <div class="form-group">
                    <label class="col-lg-4 control-label">Menu Category</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="cat_name" value="{{$edit->cat_name}}" >
                    </div>
            </div>
            <div class="form-group">
                    <label class="col-lg-4 control-label">Max Price</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control"name="mx_price" value="{{$edit->mx_price}}" >
                    </div>
            </div>
            <div class="form-group">
                    <label class="col-lg-4 control-label">Min Price</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control"name="mn_price" value="{{$edit->mn_price}}" >
                    </div>
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