@extends('app')

@section('content')
<div class="row layout-spacing">
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12"></div>
	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
		<div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center pb-2">
                        <h5 class="question">{{ $question->question }}</h5>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center pb-2">
                        <div class="list-group list-options">
                            @foreach(json_decode($question->options) as $option)
                            <a href="javascript:void(0);" data-id="{{ $question->id }}" data-option="{{ array_search($option, json_decode($question->options)) }}" class="option list-group-item list-group-item-action">{{ $option }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center pb-2 next">
                        <button class="btn btn-primary button" disabled="" data-id="{{ $question->id }}">Next</button>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center pb-2">
                        <p class="explation"></p>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12"></div>
</div>
@endsection

@push('styles')

@endpush

@push('scripts')
<script type="text/javascript">
    $(function () {
        const ids = [];
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.list-options').on('click', '.option', function () {
            var id = $(this).data('id');
            var answer = $(this).data('option');
            $.ajax({
                type: "post",
                url: "{{ route('check') }}",
                data: { 
                    id: id,
                    answer: answer
                },
                dataType: 'json',
                success: function(response) {
                    $('.next button').attr('disabled', false);
                    if (response["status"] == "correct") {
                        $('a[data-option]').each(function (e) {
                            if (e == answer) {
                                $('a[data-option="' + answer + '"]').removeClass();
                                $('a[data-option="' + answer + '"]').addClass('option list-group-item list-group-item-action active disabled bg-success');
                            }
                            else {
                                $('a[data-option="' + e + '"]').removeClass();
                                $('a[data-option="' + e + '"]').addClass('option list-group-item list-group-item-action disabled');
                            }
                        });
                    }
                    else {
                        $('a[data-option]').each(function (e) {
                            if (e == answer) {
                                $('a[data-option="' + answer + '"]').removeClass();
                                $('a[data-option="' + answer + '"]').addClass('option list-group-item list-group-item-action active disabled bg-danger');
                            }
                            else if(e == response["correct_answer"]) {
                                $('a[data-option="' + response["correct_answer"] + '"]').removeClass();
                                $('a[data-option="' + response["correct_answer"] + '"]').addClass('option list-group-item list-group-item-action active disabled bg-success');
                            }
                            else {
                                $('a[data-option="' + e + '"]').removeClass();
                                $('a[data-option="' + e + '"]').addClass('option list-group-item list-group-item-action disabled');
                            }
                        });
                    }
                    $('.explation').text(response["explation"]);
                },
                failure: function (response) {
                    console.log(response);
                },
                timeout:3000
            });
        });
        $('.next').on('click', '.button', function () {
            ids.push($(this).data('id'));
            console.log(ids);
            $('.next button').attr('disabled', true);
            $.ajax({
                type: "post",
                url: "{{ route('next') }}",
                data: { 
                    ids: ids
                },
                dataType: 'json',
                success: function(response) {
                    var obj = JSON.parse(response['options']);
                    $('.next button').data('id', response['question']['id']);
                    $('.explation').empty();
                    $('.list-options').empty();
                    jQuery.each(obj, function(i, val) {
                        $('.list-options').append('<a href="javascript:void(0);" data-id="' + response["question"]["id"] + '" data-option="' + i + '" class="option list-group-item list-group-item-action">' + val + '</a>');
                    });
                    $('.question').text(response["question"]["question"]);
                },
                failure: function(response) {
                    console.log(response);
                },
                timeout:3000
            });
        });
    });
</script>
@endpush