@extends('layouts.app')
@section('pagetitle', 'Dashboard')

@section('body')

@section('admin_body')



	@if($errors->any())
		<ul class="list-unstyled">
			@foreach($errors->all() as $error)
			<li>
				<div class="alert alert-danger">{{ $error }}</div>
			</li>
			@endforeach
		</ul>				
	@endif
	<div class="container">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<div id="logreg" class="card text-white">
				  <div class="card-body">
				    <form method="POST" action="/review/{{$edit_review->id}}/edit" enctype="multipart/form-data">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}		
						@foreach($edit_review->games as $game)
						<small>Game id {{$game->id}} | Review id {{$edit_review->id}}</small>
							<input type="hidden" name="gameid" id="gameid" value="{{$game->id}}">	
							<input type="hidden" name="rating" id="rating" value="{{$game->pivot->rating}}">
							<div class="form-group">
								<label>Edit Comment</label>
								<textarea class="form-control" id="comment" name="comment">{{$game->pivot->comment}}</textarea>
							</div>
						@endforeach
						<div class="row">
							<div class="col-lg-6">
								<a href="/menu/{{$game->id}}" class="btn form-control">Back</a>
							</div>
							<div class="col-lg-6">
								<button type="submit" class="btn btn-dark form-control">Save</button>
							</div>
						</div>
						
					</form>
					
				  </div>
				</div>
			</div>
		</div>
	</div>
	

@endsection