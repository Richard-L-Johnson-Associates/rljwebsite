<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php
    $bg_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'primary-hero' );
  ?>
  <section class="hero" style="background-image: url(<?php echo $bg_image[0]; ?>);">
    <div class="hero-container">
      <h1 class="hero--title"><?php the_field('contact_hero_title'); ?></h1>
    </div>
  </section>

  <main class="main" role="main">

    <section class="contact-form">
      <div class="container">
        <h2 class="section-title"><?php the_title(); ?></h2>
        <div class="body-content">
          <?php the_content(); ?>
        </div>
      </div>
    </section>

    <section class="contact-info">
      <div class="container">
        <div class="contact-info--col">
          <div class="contact-info--icon">
            <a href="tel:<?php the_field('contact_phone', 13); ?>">
              <svg class="icon-circle-phone">
                <use xlink:href="#icon-circle-phone"></use>
              </svg>
            </a>
          </div>
          <div class="contact-info--content">
            <a href="tel:<?php the_field('contact_phone', 13); ?>"><?php the_field('contact_phone', 13); ?></a>
          </div>
        </div>
        <div class="contact-info--col">
          <div class="contact-info--icon">
            <a href="mailto:<?php the_field('contact_email', 13); ?>">
              <svg class="icon-circle-email">
                <use xlink:href="#icon-circle-email"></use>
              </svg>
            </a>
          </div>
          <div class="contact-info--content">
            <a href="mailto:<?php the_field('contact_email', 13); ?>"><?php the_field('contact_email', 13); ?></a>
          </div>
        </div>
        <div class="contact-info--col">
          <div class="contact-info--icon">
            <a href="https://goo.gl/maps/BShDHjXzKiv">
              <svg class="icon-circle-location">
                <use xlink:href="#icon-circle-location"></use>
              </svg>
            </a>
          </div>
          <div class="contact-info--content">
            <a href="https://goo.gl/maps/BShDHjXzKiv"><?php the_field('contact_address', 13); ?></a>
          </div>
        </div>
      </div>
    </section>

	</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
