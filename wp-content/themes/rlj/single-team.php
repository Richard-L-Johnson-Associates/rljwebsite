<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <main class="main" role="main">

    <section class="member-profile">
      <div class="container">

      <div class="table-grid">
        <div class="table-col member-profile-image">
          <?php
            $image = get_field('team_profile_image');
            $size = 'team-profile-image';
            $thumb = $image['sizes'][ $size ];
          ?>
          <img src="<?php echo $thumb; ?>">
        </div>
        <div class="table-col member-info">
          <h1 class="member-name"><?php the_title(); ?></h1>
          <h2 class="member-title"><?php the_field('team_member_title'); ?></h2>
          <div class="member-bio">
            <?php the_content(); ?>
          </div>
          <p class="member-back-link back-link">
            <a href="/about">&#60; Back to About Us</a>
          </p>
        </div>
      </div>

    </section>

    <section class="cta-section cta-section__red">
      <div class="container">
        <div class="cta-section--content">
          <p><?php the_field('about_connect_content', 5); ?></p>
        </div>
        <div class="cta-section--button">
          <p><a href="<?php the_field('about_connect_button_link', 5); ?>" class="btn btn__white-border"><?php the_field('about_connect_button_label', 5); ?></a></p>
        </div>
      </div>
    </section>

  </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>