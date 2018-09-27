{{--
  Template Name: Blog Page Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection

{{--@include('page-blog', [--}}
    {{--'blog_category' => $blog_category--}}
{{--])--}}

@debug('controller')
<h1>{{ $blog_category }}</h1>
<h1>{{ $blog_category }}</h1>