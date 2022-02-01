<?php get_header() ?>

<div class="container">
  <div class="row">
    <div class="container">
      <!-- 404 Content - Add an engaging error message. -->
      <h1 class="" itemprop="name"><?php esc_html_e( 'Not Found', 'lk_boilerplate' ); ?></h1>
      <div class="" itemprop="mainContentOfPage">
        <p><?php esc_html_e( 'Nothing found for the requested page. Try a search instead?', 'lk_boilerplate' ); ?></p>
      <?php get_search_form(); ?>
      </div>
     </div>
  </div>
</div>

<?php get_footer() ?>
