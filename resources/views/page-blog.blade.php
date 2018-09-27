@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection

{{--@debug('controller')--}}
{{--<h1>{{ $blog_category }}</h1>--}}

<h1>Testing blog page</h1>