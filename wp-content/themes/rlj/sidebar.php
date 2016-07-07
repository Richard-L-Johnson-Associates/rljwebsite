<aside class="sidebar-right">

  <div class="widget widget-author">
    <div class="widget-author--header">
      <div class="widget-author--headshot">
        <img src="<?php bloginfo('template_directory'); ?>/dist/images/author-jeff-dulla.jpg" alt="Jeff Dulla">
      </div>
      <h4 class="widget-author--name">Jeff Dulla</h4>
      <p class="widget-author--job-title">VP of United Home Loans</p>
    </div>
    <div class="widget--content widget-author--content">
      <p>Jeff Dulla is a Senior Mortgage Banker with United Home Loans. In his five and half years there, Jeff has accumulated a client portfolio of approximately 500 closed loans totaling 131,000,000 in volume.</p>
      <p class="widget-author--contact-link">
        <a href="mailto:jdulla@uhloans.com">
          <svg class="icon-email widget-author--email-icon">
            <use xlink:href="#icon-email"></use>
          </svg>
          <span class="widget-author--contact-name">Contact Jeff</span>
        </a>
      </p>
    </div>
  </div>

  <div class="widget widget-newsletter">
    <h4 class="widget--title">Stay Up to Date</h4>
    <div class="widget--content">
      <p>Sign up to stay up to date on the latest Chicago mortgage news.</p>
    </div>
    <form class="widget-newsletter--form newsletter-form">
      <input type="email" placeholder="Email" class="newsletter-form--input">
      <input type="submit" value="Sign Up" class="btn btn__dk-red newsletter-form--btn">
    </form>
  </div>

  <div class="widget widget-mortgage-101">
    <h4 class="widget--title">Mortgage 101</h4>
    <div class="widget--content">
      <p>Learn your mortgage basics before you apply.</p>
    </div>
    <ul>
    <?php
      global $post;
      $myposts = get_posts('numberposts=5&category=1');
      foreach($myposts as $post) :
    ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endforeach; ?>
    </ul>
  </div>

  <?php // the_widget( 'WP_Widget_Recent_Posts', 'title=Recent Articles', 'before_title=<h3 class="widget--title">&after_title=</h3>' ); ?>

</aside>

