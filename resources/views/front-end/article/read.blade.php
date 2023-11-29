@extends('front-end._layout', [
    'pageTitle' => 'Artikel'
])

@section('content')
    <div class="container-fluid mt-3 mb-2">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div id="point_hist" data-value="{{ $pointHist }}" hidden></div>
                <div id="is_point" data-value="{{ $article->is_one_point == true ? 1 : 0 }}" hidden></div>
                <div id="countdown" class="text-center"></div>

                <div id="message" class="alert alert-success alert-dismissible fade show" role="alert" hidden>
                </div>

                <div class="text-center mb-3">
                    <h2>
                        <strong>{{ $article->title }}</strong>
                    </h2>
                </div>

                {!! $article->content !!}

            </div>

            <div class="col-xl-4 col-lg-7">

                @include('front-end.inc.point-page')

            </div>
        </div>
    </div>

@endsection

@push('foot')

<!-- jQuery Countdown plugin -->
<script src="https://cdn.rawgit.com/hilios/jQuery.countdown/2.2.0/dist/jquery.countdown.min.js"></script>

<script>
    $(document).ready(function() {
      var isPoint    = $('#is_point').data('value');
      var pointHist  = $('#point_hist').data('value');
      var targetTime = new Date().getTime() + 15000; // 15 detik

      if(isPoint == 1 && pointHist == 0 || isPoint == 0){
        isCountdown(targetTime);
      }

    });

    function isCountdown(targetTime){
        $('#countdown').countdown(targetTime, function(event) {
            $(this).html(
                event.strftime(
                    '<h3><strong>%S</strong></h3>'
                )
            );

        }).on('finish.countdown', function(event) {

            $.ajax({
            type: 'POST',
            url: '{{ route("article.ajax", "increase_point") }}',
            dataType: 'json',
            data: {
                _token: '{{ csrf_token() }}',
                id: '{{ $article->id }}'
            },
            success: function(response) {

                $('#countdown').hide();

                $('#message').removeAttr('hidden')

                $('#message').text(response.message)
                $('#point').text(response.data.point.toLocaleString())

            },
            error: function(error) {
                console.log(error);
            }
            });
        });
    }
  </script>
  
@endpush