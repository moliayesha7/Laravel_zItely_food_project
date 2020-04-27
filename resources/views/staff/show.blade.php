@extends('layouts.app')

@section('page-title')
Show Stuff 

@endsection


@section('main-content')
<div class="w-50 mt-5 mx-auto">
	<div class="card">
		<div class="card-body">
			<h2>Welcome </h2>
			<table class="table">	
				<tr>
					<td>Staff Name</td>
					<td>{{$show_data->name}}</td>		
				</tr>
				<tr>
					<td>Staff Job Title</td>
					<td>{{$show_data->job_title}}</td>		
				</tr>
				<tr>
					<td>Staff Photo</td>
					<td><img style="width:50px; height:50px;" alt="" src="{{URL::to('public/photos/staff/'.$show_data->photo)}}"></td>	
				</tr>
				<tr>
					<td>Facebook URL</td>
					<td>{{$show_data->fb}}</td>		
				</tr>
				<tr>
					<td>Twitter URL</td>
					<td>{{$show_data->twitter}}</td>		
				</tr>
				<tr>
					<td>Linkdin URL</td>
					<td>{{$show_data->linkdin}}</td>		
				</tr>
				<tr>
					<td>Instagram URL</td>
					<td>{{$show_data->ins}}</td>		
				</tr>
			</table>

		</div>
	</div>
</div>

@endsection