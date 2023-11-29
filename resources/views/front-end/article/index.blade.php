@extends('front-end._layout', [
  'pageTitle' => 'Artikel'
])

@section('content')

    <div class="container mt-3 mb-2">
        <div class="col-xl-12">
          <div class="row">

            @foreach ($articles as $key => $item)
              <div class="col-xl-6 col-lg-12 col-md-6">
                <div>
                    <a href="{{ route('public.article.read', str($item->title)->slug()) }}">
                    </a>
                  <div>
                    <h5>
                      <a href="{{ route('public.article.read', str($item->title)->slug()) }}">
                        {{ $item->title }}
                      </a>
                    </h5>
                    <p>{{ $item->description }}</p>
                    <a href="{{ route('public.article.read', str($item->title)->slug()) }}">Read More <img src="assets/images/svg/arrow-black-right.svg" alt=""></a>
                  </div>
                </div>
              </div>
            @endforeach

          </div>
        </div>

    </div>
@endsection
