@extends('frontend.layout')
@section('main-content')
	
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="staff.html">Staff</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<div class="chef">
					<div class="row">

					@foreach($staff_data as $data)
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="zoom-container">
									<a href="#">
										<img style="height:200px;"src="{{URL::to('public/photos/staff/'.$data->photo)}}" />
									</a>
								</div>
								<h3>{{$data->name}}</h3>
								<p>{{$data->job_title}}</p>
								<ul class="social t-center">
									<li><a href="{{$data->fb}}"><i class="fa fa-twitter"></i></a></li>
									<li><a href="{{$data->twitter}}"><i class="fa fa-facebook"></i></a></li>
									<li><a href="{{$data->linkdin}}"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="{{$data->ins}}"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						
					@endforeach


					</div>
				</div>
			</div>
		</div> 
	</div>
</section>
@endsection