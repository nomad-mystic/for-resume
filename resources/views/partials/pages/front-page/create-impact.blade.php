<?php

$index = 1;

?>

<section>
  <div class="home-create-impact">
    @if (isset($get_create_impact_options['title']) && !empty($get_create_impact_options['title']))
      <h2 class="title">{{ $get_create_impact_options['title'] }}</h2>
    @endif

    @if (isset($get_create_impact_options['sub_title']) && !empty($get_create_impact_options['sub_title']))
        <h3 class="sub-title">{{ $get_create_impact_options['sub_title'] }}</h3>
    @endif

    @for($detail = 0; $detail < count($get_create_impact_options); $detail++)
      @if (isset($get_create_impact_options["detail_title_{$index}"]) && !empty($get_create_impact_options["detail_title_{$index}"]))
        <section>
          <div class="detail">
            <h4 class="detail__title">{{ $get_create_impact_options["detail_title_{$index}"] }}</h4>
            <p class="detail__copy-text">{{ $get_create_impact_options["detail_textarea_{$index}"] }}</p>
          </div>
        </section>
        @php($index++)
      @endif
    @endfor
  </div>
</section>
