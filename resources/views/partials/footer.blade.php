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
      @php(dynamic_sidebar('footer-contact'))
    </div>
    <div class="social-media">
      @include('partials.components.social-media')
    </div>
  </div>
</footer>
