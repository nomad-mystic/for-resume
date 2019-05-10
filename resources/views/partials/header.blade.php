<?php

$site_scheme_and_host = '';

if (class_exists('App\Utils\SiteUtils')) {
    $site_scheme_and_host = App\Utils\SiteUtils::get_site_scheme_and_host();
    $site_logo_src = App\Utils\SiteUtils::get_site_logo_image_src();
}

?>

<header>
  <div class="header">
    <section>
      <div class="header__secondary-content">
        <h3 class="sub-title">Empowering students to chase their passions through community service</h3>
        @include('partials.components.social-media')
      </div>
    </section>
    <section>
      <div class="header__main-content-flex">
        <div class="header__branding-nav-branding-flex">
          <div class="header__branding">
            <a href="{{ home_url() }}" class="site-link">
              <img src="{{ $site_logo_src }}" alt="This is the main logo for the site. A tree with shaping the world map.">
            </a>
            <h2 class="title">Passion Impact</h2>
          </div>
          <span class="header__nav-bars" id="js-off-canvas-open-span">
            <i class="fas fa-bars" id="js-off-canvas-open-i"></i>
          </span>
        </div>
        <div class="header__nav-container-flex">
          <div class="header__donate">
            <a href="{{ $site_scheme_and_host }}/donate-today" class="effect effect-5">DONATE</a>
          </div>
          <div class="header__large-nav">
            <nav>
              @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-primary-menu']) !!}
              @endif
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="header__nav-primary" id="js-nav-primary">
        <div id="nav-primary-menu-container">
          <div class="close-icon-container">
          <span class="header__nav-bars close-span" id="js-off-canvas-close-span">
            <i class="fas fa-plus close-i" id="js-off-canvas-close-i"></i>
          </span>
          </div>
          <nav>
            @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-primary-menu']) !!}
            @endif
          </nav>
        </div>
      </div>
    </section>
  </div>
</header>
