<footer class="footer">
  <div class="footer__container">
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
        ob_start();
        dynamic_sidebar("footer-contact");
        $sidebar_output = ob_get_clean();
        if (class_exists('App\PassionPlugins\CustomWidgets\PassionCustomWidgetContact')) {
          echo apply_filters('my_sidebar_output', $sidebar_output);
        }
        ?>
      </div>
      @include('partials.components.social-media')
    </div>
    <div class="footer__newsletter">
      @include('partials.components.newsletter')
    </div>
    <span class="footer__span-decorator"></span>
    <div class="footer__copyright">
      <p>&copy;2019 - Passion Impact is a registered 501(C)3 Public Charity. EIN #: 46-5118525.</p>
      <p>A proud member of the AmeriCorps National Service Network.</p>
    </div>
  </div>
</footer>
