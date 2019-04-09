<?php

$site_logo_src = '';

if (class_exists('App\Utils\SiteUtils')) {
  $site_logo_src = App\Utils\SiteUtils::get_site_logo_image_src();
}

?>

@extends('layouts.app')

@section('content')
  <section>
    <article>
      <main>
        <div class="_404">
          <div class="_404__branding">
            <a href="{{ home_url() }}" class="site-link">
              <img src="{{ $site_logo_src }}" alt="This is the main logo for the site. A tree with shaping the world map.">
            </a>
          </div>
          @include('partials.page-header')
          @if (!have_posts())
            <div class="alert alert-warning _404__sub-title">
              {{ __('Sorry, but the page you were trying to view does not exist.', 'passion') }}
            </div>
            <div class="_404__search-form">
              {!! get_search_form(false) !!}
            </div>
          @endif
        </div>
      </main>
    </article>
  </section>
@endsection
