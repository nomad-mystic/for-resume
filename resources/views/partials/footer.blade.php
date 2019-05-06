<footer class="footer">
  <div class="footer__navigation">
    @php(dynamic_sidebar('footer-navigation'))
  </div>
  <div class="footer__about-pi">
    @php(dynamic_sidebar('footer-about-pi'))
  </div>
  <div class="footer__contact">
    <h3>Contact</h3>
    <div class="contact-details">
      <?php
        add_filter( 'my_sidebar_output', 'my_widget_filter' );
        ob_start();
        dynamic_sidebar( 'footer-contact' );
        $sidebar_output = ob_get_clean();
//        var_dump($sidebar_output);
        echo apply_filters( 'my_sidebar_output', $sidebar_output );

      function my_widget_filter( $sidebar_output ) {

        var_dump($sidebar_output);
        /**
         * Perform some kind of search and replace here on $sidebar_output.
         * Regular Expressions will likely be required in order to restrict your
         * modifications to only the widgets you wish to modify, since $sidebar_output
         * contains the output of the entire sidebar, including all widgets.
         */
        $dom = new DOMDocument;
        libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="UTF-8">' . $sidebar_output);

        var_dump($dom);
        $dom->saveHTML();
        return $dom;

      }

      ?>
    </div>
    <div class="social-media">
      @include('partials.components.social-media')
    </div>
  </div>
  <div class="footer__newsletter">
    @include('partials.components.newsletter')
  </div>
  <hr>
  <div class="footer__copyright">
    <p>&copy;2019 - Passion Impact is a registered 501(C)3 Public Charity. EIN #: 46-5118525.</p>
    <p>A proud member of the AmeriCorps National Service Network.</p>
  </div>
</footer>
