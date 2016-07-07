<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <main class="main" role="main">

    <div class="project-hero">

      <?php $row_count = count(get_field('project_images')) ?>
      <?php if( $row_count > 1 ): ?>

        <div class="project-slider">
          <?php while( have_rows('project_images') ): the_row(); ?>

            <?php
              $image = get_sub_field('project_image');
              $size = 'secondary-hero';
              $hero = $image['sizes'][ $size ];
            ?>
            <div class="project-slider--item">
              <img src="<?php echo $hero; ?>">
            </div>

          <?php endwhile; ?>
        </div>

      <?php else: ?>

        <?php
          $rows = get_field('project_images');
          $first_row = $rows[0];
          $image = $first_row['project_image'];
          $hero = $image['sizes']['secondary-hero'];
        ?>
        <img src="<?php echo $hero; ?>">

      <?php endif; ?>

    </div>

    <div class="project-info">
      <div class="container">
        <h1 class="project-title section-title"><?php the_title(); ?></h1>
        <div class="project-content body-content two-col-content">
          <?php the_content(); ?>
        </div>
        <p class="project-back-link back-link"><a href="/projects">Back to Projects</a></p>
      </div>
    </div>

    <section class="cta-section cta-section__red">
      <div class="container">
        <div class="cta-section--content">
          <p><?php the_field('projects_cta_content', 9); ?></p>
        </div>
        <div class="cta-section--button">
          <p><a href="<?php the_field('projects_cta_button_link', 9); ?>" class="btn btn__white-border"><?php the_field('projects_cta_button_label', 9); ?></a></p>
        </div>
      </div>
    </section>

  </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>