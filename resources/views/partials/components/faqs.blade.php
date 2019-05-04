@php(the_content())
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
<div class="faqs">
  <article>
    <header class="faqs__header">
      <h3 class="title">{{ __($post_title) }}</h3>
    </header>
    <div class="faqs__container">
			@if (isset($custom_post_fields) && !empty($custom_post_fields))
				@for ($field = 0; $field <= count($custom_post_fields); $field++)
					@if (isset($custom_post_fields[$field][0]) && isset($custom_post_fields[$field][1]))
						<section class="faqs__accordion-item">
              <h2 class="title">
                {{ __($custom_post_fields[$field][0]) }}
                <span>
                  <i class="fas fa-plus"></i>
                </span>
              </h2>
              <div class="faqs__accordion-content hidden">
							  <p class="content">{{ __($custom_post_fields[$field][1]) }}</p>
							</div>
						</section>
					@endif
				@endfor
			@endif
    </div>
  </article>
</div>
