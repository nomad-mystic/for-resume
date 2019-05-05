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
  <div class="footer__newsletter">
    @include('partials.components.newsletter')
  </div>
  <hr>
  <div class="footer__copyright">
    <p>&copy;2019 - Passion Impact is a registered 501(C)3 Public Charity. EIN #: 46-5118525.</p>
    <p>A proud member of the AmeriCorps National Service Network.</p>
  </div>
</footer>
