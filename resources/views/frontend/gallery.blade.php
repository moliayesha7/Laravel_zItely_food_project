@extends('frontend.layout')
@section('main-content')
	
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="gallery.html">Gallery</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<div class="row">
					<div class="col-1-4">
						<div class="zoom-container">
							<a href="#">
								<span class="zoom-caption">
									<span>Lorem ipsum</span>
								</span>
								<img src="public/frontend/images/4.jpg" />
							</a>
						</div>
					</div>
					<div class="col-1-4">
						<div class="zoom-container">
							<a href="#">
								<span class="zoom-caption">
									<span>Lorem ipsum</span>
								</span>
								<img src="public/frontend/images/5.jpg" />
							</a>
						</div>
					</div>
					<div class="col-1-4">
						<div class="zoom-container">
							<a href="#">
								<span class="zoom-caption">
									<span>Lorem ipsum</span>
								</span>
								<img src="public/frontend/images/6.jpg" />
							</a>
						</div>
					</div>
					<div class="col-1-4">
						<div class="zoom-container">
							<a href="#">
								<span class="zoom-caption">
									<span>Lorem ipsum</span>
								</span>
								<img src="public/frontend/images/7.jpg" />
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-1-4">
						<div class="zoom-container">
							<a href="#">
								<span class="zoom-caption">
									<span>Lorem ipsum</span>
								</span>
								<img src="public/frontend/images/8.jpg" />
							</a>
						</div>
					</div>
					<div class="col-1-4">
						<div class="zoom-container">
							<a href="#">
								<span class="zoom-caption">
									<span>Lorem ipsum</span>
								</span>
								<img src="public/frontend/images/9.jpg" />
							</a>
						</div>
					</div>
					<div class="col-1-4">
						<div class="zoom-container">
							<a href="#">
								<span class="zoom-caption">
									<span>Lorem ipsum</span>
								</span>
								<img src="public/frontend/images/10.jpg" />
							</a>
						</div>
					</div>
					<div class="col-1-4">
						<div class="zoom-container">
							<a href="#">
								<span class="zoom-caption">
									<span>Lorem ipsum</span>
								</span>
								<img src="public/frontend/images/11.jpg" />
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-1-4">
						<div class="zoom-container">
							<a href="#">
								<span class="zoom-caption">
									<span>Menu</span>
								</span>
								<img style="height:180px;" src="{{URL::to('public/photos/menu/0f0d73b2a42a8dd12fbb0ddced7fa5e4.jpeg')}}"/>
							</a>
						</div>
					</div>
					<div class="col-1-4">
						<div class="zoom-container">
							<a href="#">
								<span class="zoom-caption">
									<span>Lorem ipsum</span>
								</span>
								<img src="public/frontend/images/13.jpg" />
							</a>
						</div>
					</div>
					<div class="col-1-4">
						<div class="zoom-container">
							<a href="#">
								<span class="zoom-caption">
									<span>Lorem ipsum</span>
								</span>
								<img src="public/frontend/images/14.jpg" />
							</a>
						</div>
					</div>
					<div class="col-1-4">
						<div class="zoom-container">
							<a href="#">
								<span class="zoom-caption">
									<span>Lorem ipsum</span>
								</span>
								<img src="public/frontend/images/15.jpg" />
							</a>
						</div>
					</div>
				</div>
			</div>
		</div> 
	</div>
</section>

@endsection