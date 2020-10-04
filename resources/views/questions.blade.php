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
                            @foreach($question->options() as $option)
                            <a href="javascript:void(0);" data-id="{{ $question->id }}" data-option="{{ $option }}" class="option list-group-item list-group-item-action">{{ json_decode($question->options)[$option] }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center pb-2">
                        <button class="btn btn-primary next disabled" data-id="{{ $question->id }}">Next</button>
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
        $('.option').on('click', function () {
            var id = $(this).data('id');
            var answer = $(this).data('option');
            $.ajax({
                type: "POST",
                url: "{{ route('check') }}",
                data: { 
                    id: id,
                    answer: answer
                },
                dataType: 'json',
                success: function(response) {
                    $('.next').removeClass('disabled');
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
                }
            });
        });
        $('.next').on('click', function () {
            ids.push($(this).data('id'));
            $.ajax({
                type: "POST",
                url: "{{ route('next') }}",
                data: { 
                    ids: ids
                },
                dataType: 'json',
                success: function(response) {
                    $('.next').addClass('disabled');
                    $('.next').attr('data-id', response['question']['id']);
                },
                failure: function(response) {
                    console.log(response);
                }
            });
        });
    });
</script>
@endpush