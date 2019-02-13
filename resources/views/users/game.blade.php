@extends('layouts.app')
@section('pagetitle', 'Dashboard')

@section('body')
@section('admin_body')

<div class="container">
	@if(Session::has("addReview"))
	<div class="alert alert-success">
		{{ Session::get('addReview') }}	
	</div>
	@elseif(Session::has("updatedGame"))
	<div class="alert alert-success">
		{{ Session::get('updatedGame') }}	
	</div>
	@elseif(Session::has("updatedReview"))
	<div class="alert alert-success">
		{{ Session::get('updatedReview') }}	
	</div>
	@elseif(Session::has("deletedReview"))
	<div class="alert alert-danger">
		{{ Session::get('deletedReview') }}	
	</div>
	@else
	@endif

	@if($errors->any())
		<ul class="list-unstyled">
			@foreach($errors->all() as $error)
			<li>
				<div class="alert alert-danger">{{ $error }}</div>
			</li>
			@endforeach
		</ul>				
	@endif

	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div class="card card-block my-5">
				<img class="card-img-top mx-auto my-auto py-3" src="/{{$show_game->image_path}}" alt="Card image cap" style="height: 50%; width: 80%;">
				<div class="card-body">
					<h3>Title: {{$show_game->title}}</h3>
					<h5>Developer: {{$show_game->developer}}</h5>
					<h5>Date Released: {{$show_game->date_released}}</h5>
					<p class="card-text text-justify">{{$show_game->content}}</p>
					@if(Auth::user()->admin == 1)
					<div class="row">
						<div class="col-lg-6 my-1">
							<a href="" class="btn btn-white form-control border" data-toggle="modal" data-target="#deleteModal">Delete</a>
						</div>

						<div class="col-lg-6 my-1">
							<form method="GET" action="/menu/{{$show_game->id}}/edit">
								{{csrf_field()}}
								{{method_field('EDIT')}}
								<button type="submit" class="btn btn-dark form-control">Edit</button>												
							</form>	
						</div>		    									    		
					</div>
					@endif
				</div>
				<div class="card-footer">
					<div class="row py-3 text-center">
						<div class="col-lg-8"></div>
						<div class="col-lg-2 py-3">
							<a href="/menu" class="btn btn-white border text-center">Back to Menu</a>
						</div>
						<div class="col-lg-2 py-3">
							<a href="" data-toggle="modal" data-target="#reviewModal" class="btn btn-dark">Submit a Review</a>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-10">
							<p><h3>What gamers say ({{$gameReviewCount}})</h3></p>
							@foreach($reviews as $review)									  		
							@foreach($review->games as $game)
							@if($game->pivot->game_id == $show_game->id)
							<div class="card my-2">
							  <div class="card-body">
							    <div class="row">
							    	<div class="col-lg-6">
							    		{{$game->pivot->comment}} rating: {{$game->pivot->rating}}<p><small>{{$game->pivot->updated_at->diffForHUmans()}} by: {{$review->user->username}}</small><p>
						    		</div>
							    	<div class="col-lg-6">
							    		<div class="row">
							    			<div class="col-lg-3 my-2">
							    				@if(Auth::user()->admin == 1 || Auth::user()->id == $review->user_id)
													<a href="" class="btn btn-white border" data-toggle="modal" data-target="#deleteReview{{ $review->id }}">Delete</a>
												@endif
							    			</div>
							    			<div class="col-lg-4 my-2">
							    				@if(Auth::user()->id == $review->user_id){{-- to show access buttons for edit/delete review --}}
							    				<form method="GET" action="/review/{{$review->id}}/edit">
													<p><button type="submit" class="btn btn-secondary">Edit</button></p>
												</form>
												@endif
							    			</div>
							    		</div>
								    	</div>
							    </div>
								
									
								
							
							  </div>
							</div>{{-- end card --}}
							
							@endif
							{{-- Delete Review Modal --}}
							<div id="deleteReview{{ $review->id }}" class="modal" tabindex="-1" role="dialog">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Delete Review</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										{{--  @foreach($reviews as $review) --}}
										@if($review->id == $review->id)
										<div class="modal-body">
											<p>Do you want to delete this review {{$review->id}}?</p>
										</div>
										<div class="modal-footer">
											<form method="POST" action="/review/{{$review->id}}/delete">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
												<button type="submit" class="btn btn-danger">Confirm</button>			      		
											</form>
										</div>
										@endif
										{{--  @endforeach --}}
									</div>
								</div>
							</div>
							@endforeach
							@endforeach
						</div>
					</div>
				</div>
			</div>

			{{-- END OF PAGE --}}


			{{-- Delete Game Modal --}}
			<div id="deleteModal" class="modal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Delete Game</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Do you want to delete {{ $show_game->title }}</p>
						</div>
						<div class="modal-footer">
							<form method="POST" action="/menu/{{ $show_game->id }}/delete">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
								<button type="submit" class="btn btn-danger">Confirm</button>			      		
							</form>
						</div>
					</div>
				</div>
			</div>

			{{-- Review Modal --}}
			<div id="reviewModal" class="modal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					@if($errors->any())
						<ul class="list-unstyled">
							@foreach($errors->all() as $error)
							<li>
								<div class="alert alert-danger">{{ $error }}</div>
							</li>
							@endforeach
						</ul>				
					@endif

					<form method="POST" action="/submitReview/{{ $show_game->id }}">
						{{csrf_field()}}
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Please rate this game</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="rate">
									<input type="radio" id="star5" name="rating" value="5" />
									<label for="star5" title="text">5 stars</label>
									<input type="radio" id="star4" name="rating" value="4" />
									<label for="star4" title="text">4 stars</label>
									<input type="radio" id="star3" name="rating" value="3" />
									<label for="star3" title="text">3 stars</label>
									<input type="radio" id="star2" name="rating" value="2" />
									<label for="star2" title="text">2 stars</label>
									<input type="radio" id="star1" name="rating" value="1" />
									<label for="star1" title="text">1 star</label>
								</div>

								<textarea class="form-control" placeholder="Type in your comments" id="comment" name="comment"></textarea>
								<input id="gameid" type="hidden" name="gameid" value="{{$show_game->id}}">
							</div>
							<div class="modal-footer">
								<button id="reviewBtn" type="submit" class="btn btn-dark">Submit</button>			      					        
							</div>			      
						</div>
					</form>
				</div>
			</div>

			

{{-- 		</div>
		<div class="col-lg-1"></div>
	</div>
</div> --}}

@endsection