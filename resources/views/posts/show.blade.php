@extends('layouts.app')

@section('page-title')
Show Post 

@endsection


@section('main-content')
<div class="w-50 mt-5 mx-auto">
	<div class="card">
		<div class="card-body">
			<h2>Welcome </h2>
			<table class="table">	
				<tr>
					<td>Post Title</td>
					<td>{{$show_data->post_title}}</td>		
				</tr>
				<tr>
					<td>Post Date</td>
					<td>{{$show_data->	post_date}}</td>		
				</tr>
				<tr>
					<td>Post Category</td>
					<td>{{$show_data->categoryName-> title}}</td>		
				</tr>
				<tr>
					<td>Post Photo</td>
					<td><img style="width:50px; height:50px;" alt="" src="{{URL::to('public/photos/post/'.$show_data->photo)}}"></td>	
				</tr>
				<tr>
					<td>Post Content</td>
					<td>{{$show_data->post_content}}</td>		
				</tr>
			</table>

		</div>
	</div>
</div>

@endsection