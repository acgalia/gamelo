@extends('layouts.app')
@section('pagetitle', 'Dashboard')

@section('body')
@section('admin_body')

<div class="container">
	@if(Session::has("deleteGame"))
		<div class="alert alert-success">
			{{ Session::get('deleteGame') }}	
		</div>
	@endif
	
	<div class="row">		
	</div>
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div id="gamemenu" class="card text-white">
			  <div class="card-body">
			    <h1>Menu Page</h1>
			  </div>
			</div>
		</div>
		<div class="col-lg-1"></div>
		<div class="col-lg-1"></div>
		<div class="col-lg-10">

			{{-- <h2>Genre</h2>
			@foreach ($genres as $genre)
				<ul>
					<li>{{$genre->name}}</li>
				</ul>
			@endforeach --}}

			<div class="row">
				<div class="col-lg-12">
					@foreach ($games as $game)
						<div id="gamemenu" class="card card-block my-5">
						  <div class="card-header">
						    {{$game->genre->name}}
						  </div>
						  <div class="card-body">
						  	<div class="row">
						  		<div class="col-lg-6 mb-1">
						  			<img class="card-img-top img-fluid border-black" src="{{$game->image_path}}" alt="Card image cap">
						  		</div>

						  		<div class="col-lg-6 mt-1">
						  			<h2 class="card-title">{{$game->title}}</h2>
						    		<h5 class="card-title text-white-50">{{$game->developer}}</h5>
						    		<h6 class="text-muted">({{$game->date_released}})</h6>
						    		<a href="/menu/{{ $game->id }}" class="btn border mt-5">More Info</a>
								</div>						  		
						  	</div>
						    
						    
						  </div>
						  <div class="card-footer text-muted">
						  	<div class="row">
						  		<div class="col-lg-4">
						  			{{-- Average of stars --}}
						  		</div>
						  		<div class="col-lg-4">
						  			{{-- Total count of reviews --}}
						  			{{-- @foreach($reviews as $review) --}}
						  			
							  			{{-- {{$review->comments_count}} --}}
						  			
						  			{{-- @endforeach --}}
						  		</div>
						  		<div class="col-lg-4">
						  			Posted {{$game->created_at->diffForHUmans()}}
						  		</div>
						  	</div>
						  </div>
						</div>
					@endforeach
				</div>
						<div class="mx-auto">{{$games->links()}}</div>						
			</div>
		</div>
		<div class="col-lg-1"></div>
	</div>
</div>







@endsection