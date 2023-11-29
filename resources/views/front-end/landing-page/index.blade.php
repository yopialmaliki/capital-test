@extends('front-end._layout', [
    'pageTitle' => 'Welcome'
])


@push('head')
<style>
    .login-page {
        min-height: 250px;
        margin: 90px 0;
    }

    .ads-page {
        min-height: 295px;
        margin: 90px 0;
    }
</style>
@endpush

@section('content')

<div class="container-fluid mt-2 mb-2">

    <div class="row justify-content-center">

      <div class="col-md-8 mb-1">
          <div class="card">
            <div class="card-body ads-page">

              <h1 style="text-align: center;">
                <strong>IKLAN</strong>
              </h1>
            </div>
        </div>
      </div>

        <div class="col-md-4 mb-1">
            <div class="card">
                <div class="card-body login-page">

                    <div class="row">
                        <form action="{{ route('public.login') }}" method="POST">
                            @csrf
            
                            @if(session('status'))
                                <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif
            
                                <h3 style="text-align: center;">
                                    <strong>FORM LOGIN</strong>
                                </h3>

                                <div class="row">
                                        <div class="form-group">

                                        <label for="username" class=" col-form-label text-md-end">{{ __('Username') }}</label>
            
                                        <div class="col-md-12">
                                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="form-group">

                                        <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
            
                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <button type="password" id="input-submit" class="btn">Login</button>
            
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
