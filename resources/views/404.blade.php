@extends('layouts.app')

@section('content')
  <section>
    <article>
      <main>
        <div class="_404">
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
