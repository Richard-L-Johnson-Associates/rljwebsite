<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php
    $bg_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'primary-hero' );
  ?>
  <section class="hero" style="background-image: url(<?php echo $bg_image[0]; ?>);">
    <div class="hero-container">
      <h1 class="hero--title"><?php the_field('services_hero_title'); ?></h1>
    </div>
  </section>

  <main class="main" role="main">

    <section class="services">
      <?php
        $args = array( 'post_type' => 'services', 'posts_per_page' => -1 );
        $myposts = get_posts( $args );
      ?>

      <div class="tabs services-tabs">
      <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <a href="#" class="tabs--item services-tabs--item"><?php the_title(); ?></a>
      <?php endforeach; ?>
      </div>

      <div class="services-list">
        <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <div class="services-item">
          <a href="#" class="sevices-mobile-toggle"><?php the_title(); ?></a>
          <div class="services-mobile-container">
            <div class="services-hero">
              <?php
                $image = get_field('services_main_image');
                $size = 'secondary-hero';
                $services_image = $image['sizes'][ $size ];
              ?>
              <img src="<?php echo $services_image; ?>">
            </div>
            <div class="services-info">
              <div class="container">
                <h2 class="section-title"><?php the_title(); ?></h2>
                <div class="service-content body-content two-col-content">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <?php wp_reset_postdata();?>
    </section>

    <section class="cta-section cta-section__red">
      <div class="container">
        <div class="cta-section--content">
          <p><?php the_field('services_cta_content'); ?></p>
        </div>
        <div class="cta-section--button">
          <p><a href="<?php the_field('services_cta_button_link'); ?>" class="btn btn__white-border"><?php the_field('services_cta_button_label'); ?></a></p>
        </div>
      </div>
    </section>

	</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
