@extends('website.layouts.app')
@section('title')
    @push('css')
    @endpush

@section('content')
<section
        class="heading headerMedium Blue"
        style="
          background-image: url('{{ asset("assets/website/media/people-690810.jpg") }}');
          background-repeat: no-repeat;
          background-size: cover;
        "
      >
        <div class="container">
          <h2>
            <p>Heading <br />Lorum ipsum dolor itsemet</p>
          </h2>
        </div>
      </section>
      <section class="section">
        <div class="container">
          <div class="crumbs mt-md-0 mt-sm-4">
            <a href="{{ route('home') }}" title="Home">Home</a>
            <a href="{{ route('peoples') }}" title="People">People</a>
            <span>{{ $people->name ?? '' }}</span>
          </div>

          <div class="row">
            <div class="col-md-3">
              <img src="{{ asset($people->image) }}" alt="{{ $people->name ?? '' }}" />
            </div>
            <div class="col-md-9">
              <h1 class="mt-3">{{ $people->name ?? '' }}</h1>
              <p class="person-details">
                <br />
                <strong>Tel:</strong> {{ $people->telephone ?? '' }} <br />
                <strong>Email:</strong> <a href="">{{ $people->email ?? '' }}</a>
              </p>
              <h3>Professional Experience</h3>
              
              {!! $people->description ?? '' !!}
              <a href="{{ route('peoples') }}" title="Return to directory" class="readmore"
                >Return to directory</a
              >
            </div>
          </div>
        </div>
      </section>
@endsection

@push('js')
@endpush
