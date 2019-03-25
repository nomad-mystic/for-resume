@php(the_content())
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
<div class="faqs">
  <article>
    <header>
      <h3 class="header">{{ $post_title }}</h3>
    </header>
    <div class="faqs__container">
      @if (isset($customPostFields) && !empty($customPostFields))
        @for ($field = 0; $field <= count($customPostFields); $field++)
          @if (isset($customPostFields[$field][0]) && isset($customPostFields[$field][1]))
            <section class="faqs__accordion-item">
              <h2 class="title">{{ $customPostFields[$field][0] }}</h2>
              <div class="faqs__accordion-content hidden">
                <p class="content">{{ $customPostFields[$field][1] }}</p>
              </div>
            </section>
          @endif
        @endfor
      @endif
    </div>
  </article>
</div>
