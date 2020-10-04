@extends('app')

@section('content')
<div class="row layout-spacing">
	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"></div>
	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
		<div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area">
                <div class="row">
                	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center pb-2">
                        <img src="{{ asset('img/favicon.png') }}" width="50%" height="90%">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center pb-2">
                        <a href="{{ route('questions') }}" class="btn btn-primary">Start</a>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"></div>
</div>
@endsection