@extends('app')

@section('content')
<div class="row layout-spacing">
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12"></div>
	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
		<div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <h4>{{ config('app.name', 'Laravel') }}</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="row">
                	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center pb-2">
                        <img src="{{ asset('img/favicon.png') }}">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center pb-2">
                        <a href="{{ route('questions') }}" class="btn btn-primary">Start</a>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12"></div>
</div>
@endsection