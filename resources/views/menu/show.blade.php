@extends('layouts.app')

@section('page-title')
Show Menu 

@endsection


@section('main-content')
<div class="w-50 mt-5 mx-auto">
	<div class="card">
		<div class="card-body">
			<h2>Welcome </h2>
			<table class="table">	
				<tr>
					<td>Menu Name</td>
					<td>{{$show_data->name}}</td>		
				</tr>
				<tr>
					<td>Menu Category</td>
					<td>{{$show_data->cat_name}}</td>		
				</tr>
				<tr>
					<td>Max Price</td>
					<td>{{$show_data->mx_price}}</td>		
				</tr>
				<tr>
					<td>Min Price</td>
					<td>{{$show_data->mn_price}}</td>		
				</tr>
				<tr>
					<td>Menu Photo</td>
					<td><img style="width:50px; height:50px;" alt="" src="{{URL::to('public/photos/menu/'.$show_data->photo)}}"></td>	
				</tr>
				
			</table>

		</div>
	</div>
</div>

@endsection