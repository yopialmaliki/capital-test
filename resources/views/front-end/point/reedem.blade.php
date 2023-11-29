@extends('front-end._layout', [
  'pageTitle' => 'Reedem'
])


@section('content')
    <div class="container-fluid mt-3 mb-2">
        <div class="row">
            <div class="col-xl-8 col-lg-7">

                <div id="message" class="alert alert-success alert-dismissible fade show" role="alert" hidden>
                </div>

                <form id="form" action="{{ route('point.update', $point->id) }}" method="POST" class="form-valide-with-icon needs-validation row" novalidate>
                    @csrf
                    @method('PUT')
              
                    @if(session('status'))
                      <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
                          {{ session('message') }}
                      </div>
                    @endif
  
                    <h2> Konversi Point </h2>
  
                      <div class="row">
  
                        <div class="col-md-6 mb-2">
                          <div class="form-group">
                            <label for="nilai_point">Point</label>
                              <input type="number" class="form-control " name="nilai_point" id="nilai_point" value="">
                          </div>
                        </div>
  
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                              <label for="convert_point">Konversi Point, 1 Point = Rp. 0,002</label>
                                <input type="text" class="form-control " name="convert_point" id="convert_point" value="" readonly>
                            </div>
                          </div>
  
                      </div>

                      <div class="row">
  
                        <div class="col-md-12">
                          <div class="form-group">
                              <button class="btn mt-2" type="submit" id="input-submit">Submit form</button>
                          </div>
                        </div>
  
                      </div>

                </form>
  
            </div>

            <div class="col-xl-4">

              @include('front-end.inc.point-page')

            </div>
        </div>
    </div>

@endsection

@push('foot')

<script>
    $(function() {

        $(document).on('keyup', '#nilai_point', function() {
              var value      = $(this).val();

              var point      = $('#point').text();
              var pointTotal = parseInt(point.replace(/,/g, ''));

              if(value <= pointTotal){
                var pointInput   = value.replace(/[^0-9]/g, "");

                $('#nilai_point').val(pointInput)

                var convertPoint = parseInt(value) * 0.002;

                $('#convert_point').val(convertPoint.toLocaleString('ID',{minimumFractionDigits: 2}))
              } else if(value > pointTotal) {

                alert('Point yang anda masukan, melebihi point yang dimiliki');

              }


        })

    });


  </script>
  
@endpush