<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php
    $bg_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'primary-hero' );
  ?>
  <section class="hero" style="background-image: url(<?php echo $bg_image[0]; ?>);">
    <div class="hero-container">
      <h1 class="hero--title"><?php the_field('about_hero_title'); ?></h1>
    </div>
  </section>

  <main class="main" role="main">

    <section class="page-content">
      <div class="container">
        <h1 class="section-title"><?php the_title(); ?></h1>
        <div class="body-content">
      		<?php the_content(); ?>
        </div>
      </div>
    </section>

    <section class="team">
      <div class="container">
        <h1 class="section-title">Our Team</h1>
        <div class="team-grid">
        <?php
          $args = array( 'post_type' => 'team', 'posts_per_page' => -1 );
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <div class="team-grid--item">
              <a href="<?php echo get_permalink(); ?>" class="team-grid--link">
                <?php
                  $image = get_field('team_profile_image');
                  $size = 'team-profile-image';
                  $thumb = $image['sizes'][ $size ];
                ?>
                <div class="team-grid--thumb">
                  <img src="<?php echo $thumb; ?>">
                </div>
                <div class="red-overlay"></div>
                <div class="team-grid--member-info">
                  <p class="team-grid--member-name"><?php the_title(); ?></p>
                  <p class="team-grid--member-title"><?php the_field('team_member_title'); ?></p>
                </div>
              </a>
            </div>
          <?php endforeach;
          wp_reset_postdata();?>
        </div>
      </div>
    </section>

    <section class="cta-section cta-section__red">
      <div class="container">
        <div class="cta-section--content">
          <p><?php the_field('about_connect_content'); ?></p>
        </div>
        <div class="cta-section--button">
          <p><a href="<?php the_field('about_connect_button_link'); ?>" class="btn btn__white-border"><?php the_field('about_connect_button_label'); ?></a></p>
        </div>
      </div>
    </section>

	</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
