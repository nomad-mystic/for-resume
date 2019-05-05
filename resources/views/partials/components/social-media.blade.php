<?php
$social_media_links = [];

if (class_exists('App\Controller\Components\SocialMediaLinks')) {
  $social_media_links = App\Controller\Components\SocialMediaLinks::get_metadata();
}
?>

<section>
  <div class="social-media">
    @if (isset($social_media_links) && !empty($social_media_links))
      @for ($field = 0; $field <= count($social_media_links); $field++)
        @if (isset($social_media_links[$field][0]) && isset($social_media_links[$field][1]))
          <a href="{{ $social_media_links[$field][0] }}" target="_blank" class="link">
            <i class="fab fa-{{ $social_media_links[$field][1] }}"></i>
          </a>
        @endif
      @endfor
    @endif
  </div>
</section>
