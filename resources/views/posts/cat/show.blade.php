@extends('layouts.app')

@section('page-title')
Show Post Category

@endsection


@section('main-content')
<div class="w-75 mt-5 mx-auto">
	<div class="card">
		<div class="card-body">
			<h2>Welcome </h2>
			<table class="table">	
				<tr>
					<td>Category Name</td>
					<td>{{$show_data->title}}</td>		
				</tr>
			</table>

		</div>
	</div>
</div>

@endsection