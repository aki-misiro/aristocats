      <footer role="contentinfo" class="footer">
         <div class="footer-Widgets">
            <div class="container-fluid">
               <div class="row">
                  <?php if( is_active_sidebar( 'footer-widget-area' ) ) : ?>
                  <div class="col-md-4">
                     <?php dynamic_sidebar( 'footer-widget-area' ); ?>
                  </div>
                  <?php endif; ?>
                  <?php if ( is_active_sidebar( 'footer-widget-area-2' ) ) : ?>
                  <div class="col-md-4">
                     <?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
                  </div>
                  <?php endif; ?>
                  <?php if ( is_active_sidebar( 'footer-widget-area-3' ) ) : ?>
                  <div class="col-md-4">
                     <?php dynamic_sidebar( 'footer-widget-area-3' ); ?>
                  </div>
                  <?php endif; ?>
               </div>
            </div>
         </div>
         <p class="footer-Copyright">
            <small>&copy;&nbsp;&nbsp;The Aristocats&nbsp;&nbsp;All rights reserved</small>
         </p>
      </footer>
   </div>
   <?php wp_footer(); ?>
</body>

</html>