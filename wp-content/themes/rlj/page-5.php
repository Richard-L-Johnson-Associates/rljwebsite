<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="hero">
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
            <a href="<?php echo get_permalink(); ?>" class="team-grid--item">
              <?php
                $image = get_field('team_profile_image');
                $size = 'team-profile-image';
                $thumb = $image['sizes'][ $size ];
              ?>
              <img src="<?php echo $thumb; ?>">
              <div class="red-overlay"></div>
              <div class="team-grid--member-info">
                <p><?php the_title(); ?></p>
                <p><?php the_field('team_member_title'); ?></p>
              </div>
            </a>
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
