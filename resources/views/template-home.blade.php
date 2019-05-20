{{--
  Template Name: Home Page Template
--}}

<?php

use App\Controller\Components\HomePageSettings;

$create_impact_options_values = HomePageSettings::get_create_impact_options();

if (class_exists('\App\Controller\Components\HomePageSettings')) {
  $create_impact_options_values = HomePageSettings::get_create_impact_options();
}

?>

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  {{--General Header--}}
  @include('partials.page-header')
  {{--Parital for this template--}}
  @include('partials.components.faqs', [
      'customPostFields' => $custom_post_fields,
      'post_title' => $post_title,
    ])
  @endwhile
@endsection
