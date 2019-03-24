@php(the_content())
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

<section>
  <div class="faqs">
    @if (isset($customPostFields) && !empty($customPostFields))
      @foreach ($customPostFields as $key => $value)
        <h2 class="title">{{ $key }}</h2>
        <p class="content">{{ $value[0] }}</p>
      @endforeach
    @endif
  </div>
</section>
