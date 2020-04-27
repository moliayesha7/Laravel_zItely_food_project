@extends('frontend.layout')
@section('main-content')
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="menu.html">Menu</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<div class="row">
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Vorta</h3>

							@foreach($all_vorta as $vorta)
							<div class="post">
								<a href="#"><img style="height:80px;" src="{{URL::to('public/photos/menu/'.$vorta->photo)}}"/></a>
								<div class="wrapper">
								  <h5><a href="#">{{$vorta->name}}</a></h5>
								  <span>${{$vorta->mx_price}} - ${{$vorta->mn_price}}</span>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Vaji</h3>
							@foreach($all_vaji as $vaji)
							<div class="post">
								<a href="#"><img style="height:80px;" src="{{URL::to('public/photos/menu/'.$vaji->photo)}}"/></a>
								<div class="wrapper">
								  <h5><a href="#">{{$vaji->name}}</a></h5>
								   <span>${{$vaji -> mx_price}} - ${{$vaji -> mn_price}}</span>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Manso</h3>

							@foreach($all_manso as $manso)
							<div class="post">
								<a href="#"><img style="height:80px;" src="{{URL::to('public/photos/menu/'.$manso->photo)}}"/></a>
								<div class="wrapper">
								  <h5><a href="#">{{$manso->name}}</a></h5>
								  <span>${{$manso->mx_price}} - ${{$manso->mn_price}}</span>
								</div>
							</div>
							@endforeach

							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Vat</h3>
							@foreach($all_vat as $vat)
							<div class="post">
								<a href="#"><img style="height:80px;" src="{{URL::to('public/photos/menu/'.$vat->photo)}}"/></a>
								<div class="wrapper">
								  <h5><a href="#">{{$vat->name}}</a></h5>
								  <span>${{$vat->mx_price}} - ${{$vat->mn_price}}</span>
								</div>
							</div>
							@endforeach
							
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Dal</h3>
							@foreach($all_dal as $dal)
							<div class="post">
								<a href="#"><img style="height:80px;" src="{{URL::to('public/photos/menu/'.$dal->photo)}}"/></a>
								<div class="wrapper">
								  <h5><a href="#">{{$dal->name}}</a></h5>
								  <span>${{$dal->mx_price}} - ${{$dal->mn_price}}</span>
								</div>
							</div>
							@endforeach
							
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Biriani</h3>
							@foreach($all_biriani as $biriani)
							<div class="post">
								<a href="#"><img style="height:80px;" src="{{URL::to('public/photos/menu/'.$biriani->photo)}}"/></a>
								<div class="wrapper">
								  <h5><a href="#">{{$biriani->name}}</a></h5>
								  <span>${{$biriani->mx_price}} - ${{$biriani->mn_price}}</span>
								</div>
							</div>
							@endforeach
							
						</div>
					</div>
				</div>
			</div>
		</div> 
	</div>
</section>

@endsection