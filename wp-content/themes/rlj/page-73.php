<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="hero hero-bid-request">
    <div class="hero-container">
      <h1 class="hero--title"><?php the_title(); ?></h1>
    </div>
  </section>

  <main class="main" role="main">

    <section class="contact-form">
      <div class="container">
        <h2 class="section-title">Request Form Details</h2>
        <div class="body-content">
          <?php the_content(); ?>
        </div>
      </div>
    </section>

    <section class="contact-info">
      <div class="container">
        <div class="contact-info--col">
          <div class="contact-info--icon">
            <svg class="icon-circle-phone">
              <use xlink:href="#icon-circle-phone"></use>
            </svg>
          </div>
          <div class="contact-info--content">
            <?php the_field('contact_phone', 13); ?>
          </div>
        </div>
        <div class="contact-info--col">
          <div class="contact-info--icon">
            <svg class="icon-circle-email">
              <use xlink:href="#icon-circle-email"></use>
            </svg>
          </div>
          <div class="contact-info--content">
            <?php the_field('contact_email', 13); ?>
          </div>
        </div>
        <div class="contact-info--col">
          <div class="contact-info--icon">
            <svg class="icon-circle-location">
              <use xlink:href="#icon-circle-location"></use>
            </svg>
          </div>
          <div class="contact-info--content">
            <?php the_field('contact_address', 13); ?>
          </div>
        </div>
      </div>
    </section>

	</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>