{{--
  Template Name: Get Involved Template
--}}

<?php
$category = 'Get Involved Student';
$postType = 'passion_faqs';
$customPostFields = [];

if (class_exists('\App\Controller\Components\FaqsComponent')) {
  $customPostFields = \App\Controller\Components\FaqsComponent::getPostCustomFields($category, $postType);
}
?>

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  {{--General Header--}}
  @include('partials.page-header')
  {{--Parital for this template--}}
  @include('partials.components.faqs', ['customPostFields' => $customPostFields])
  @endwhile
@endsection
