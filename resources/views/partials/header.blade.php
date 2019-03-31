<?php

$social_media_links = [];

if (class_exists('App\Controller\Components\SocialMediaLinks')) {
    $social_media_links = App\Controller\Components\SocialMediaLinks::get_metadata();
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
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
        </nav>

    </div>
</header>
