@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.pages.front-page.create-impact')
    @include('partials.pages.front-page.get-involved')
  @endwhile
@endsection
