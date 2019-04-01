{{--
  Template Name: Get Involved Template
--}}

<?php
use App\Controller\Components\FAQsComponent;$category = 'Get Involved Student';

$post_type = 'passion_faqs';
$custom_post_fields = [];

if (class_exists('\App\Controller\Components\FaqsComponent')) {
  $post_title = FAQsComponent::get_the_title($category, $post_type);
  $custom_post_fields = FAQsComponent::get_post_custom_fields($category, $post_type);
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
