<?php

$social_media_links = [];
$site_scheme_and_host = '';

if (class_exists('App\Controller\Components\SocialMediaLinks')) {
    $social_media_links = App\Controller\Components\SocialMediaLinks::get_metadata();
}

if (class_exists('App\Utils\SiteUtils')) {
    $site_scheme_and_host = App\Utils\SiteUtils::get_site_scheme_and_host();
    $site_logo_src = App\Utils\SiteUtils::get_site_logo_image_src();
}

?>

<header>
    <div class="header">
        <h3 class="header__sub-title">Empowering students to chase their passions through community service</h3>
        <section>
        <div class="header__social-media">
        @if (isset($social_media_links) && !empty($social_media_links))
            @for ($field = 0; $field <= count($social_media_links); $field++)
                @if (isset($social_media_links[$field]))
                    <span>{{ $social_media_links[$field] }}</span>
                @endif
            @endfor
        @endif
        </div>
        </section>
        <nav class="header__nav-primary">
            <div class="header__branding">
                <img src="{{ $site_logo_src }}" alt="This is the main logo for the site. A tree with shaping the world map.">
                <h2 class="header__title">Passion Impact</h2>
            </div>
            @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
            <button>
                <a href="{{ $site_scheme_and_host }}/donate-today">DONATE</a>
            </button>
        </nav>
    </div>
</header>
