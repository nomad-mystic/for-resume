<?php

$index = 1;

?>

<section>
  <div class="home-get-involved">
    @if (isset($get_get_involved_options['title']) && !empty($get_get_involved_options['title']))
      <h2 class="title">{{ $get_get_involved_options['title'] }}</h2>
    @endif

    @for($detail = 0; $detail < count($get_get_involved_options); $detail++)
      @if (isset($get_get_involved_options["detail_title_{$index}"]) && !empty($get_get_involved_options["detail_title_{$index}"]))
        <section>
          <div class="detail">
            <h4 class="detail__title">{{ $get_get_involved_options["detail_title_{$index}"] }}</h4>
            <p class="detail__copy-text">{{ $get_get_involved_options["detail_textarea_{$index}"] }}</p>
            <a class="detail__link">{{ $get_get_involved_options["detail_link_input_{$index}"] }}</a>
          </div>
        </section>
        @php($index++)
      @endif
    @endfor
  </div>
</section>
