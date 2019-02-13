@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white">
            <div class="card border" id="logreg">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="row">
                        {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div> --}}
                        <div class="col-lg-6">
                            You are logged in!
                        </div>
                        <div class="col-lg-6">
                            <a href="/menu" type="button" class="btn btn-dark border-white">Enter Website</a>
                        </div>
                        {{-- @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
