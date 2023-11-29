@extends('front-end._layout', [
    "pageTitle" => "Register",
    // "Title"     => "Register"
])

@section('content')

  <div class="card">
    <div class="card-header">
      <strong> FORM REGISTER </strong>
    </div>

    <div class="card-body">
      <div class="container mb-5">
          <div class="row">
              <form action="{{ route('public.store') }}" method="post">
                  @csrf

                  @if(session('status'))
                    <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
                        {{ session('message') }}
                    </div>
                  @endif

                  <h2>Data Member </h2>

                    <div class="row">

                      <div class="col-md-6 mb-2">
                        <div class="form-group">
                          <label for="name">Nama</label>
                            <input type="text" class="form-control " name="name" value="">
                        </div>
                      </div>

                      <div class="col-md-6 mb-2">
                          <div class="form-group">
                            <label for="identity_number">No KTP</label>
                              <input type="number" class="form-control " name="identity_number" value="">
                          </div>
                        </div>

                    </div>
                  
                    <div class="row">

                      <div class="col-md-6 mb-2">
                        <div class="form-group">
                          <label for="gender">Jenis Kelamin</label>
                          <select id='gender' name='gender' class='form-control chosen jenis_kelamin'>;
                            <option value='' selected disabled> Pilih </option>;
                            <option value='male' > Laki-Laki </option>;
                            <option value='female' > Perempuan </option>;
                          </select>
                        </div>
                      </div>
                      
                      <div class="col-md-6 mb-2">
                        <div class="form-group">
                          <label for="phone_number">No HP</label>
                            <input type="number" class="form-control" id="phone_number" name="phone_number" value="">
                        </div>
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-md-6 mb-2">
                        <div class="form-group">
                          <label for="email">Email</label>
                            <input type="email" class="form-control " name="email" value="">
                        </div>
                      </div>
                      <div class="col-md-6 mb-2">
                        <div class="form-group">
                          <label for="city">Kota</label>
                            <input type="text" class="form-control " name="city" value="">
                        </div>
                      </div>

                    </div>
                  
                    <div class="row">

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="refferal_code">Kode Referal</label>
                            <input type="text" class="form-control " name="refferal_code" value="">
                        </div>
                      </div>

                    </div>
                  
                    <h2 class="mt-2">Data Login</h2>

                    <div class="row">

                      <div class="col-md-6 mb-2">
                        <div class="form-group">
                          <label for="username">Username</label>
                            <input type="number" class="form-control" id="username" name="username" value="" readonly>
                        </div>
                      </div>
                      
                      <div class="col-md-6 mb-2">
                        <div class="form-group">
                          <label for="password">Password</label>
                            <input type="password" class="form-control " name="password" value="">
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
      </div>
    </div>

  </div>

@endsection


@push('foot')
    <script>

        $(function() {

            $(document).on('keyup', '#phone_number', function() {
              var value = $(this).val();

              $('#username').val(value);
            })

        })
    </script>
@endpush
