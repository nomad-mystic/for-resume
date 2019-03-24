@php(the_content())
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

<section>
  <div class="faqs">
    @if (isset($customPostFields) && !empty($customPostFields))
      @for ($field = 0; $field <= count($customPostFields); $field++)
        @if (isset($customPostFields[$field][0]) && isset($customPostFields[$field][1]))
          <h2 class="title">{{ $customPostFields[$field][0] }}</h2>
          <p class="content">{{ $customPostFields[$field][1] }}</p>
        @endif
      @endfor
    @endif
  </div>
</section>
