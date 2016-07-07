<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="hero">
    <div class="hero-container">
      <h1 class="hero--title"><?php the_field('contractors_hero_title'); ?></h1>
    </div>
  </section>

  <main class="main" role="main">

    <div class="container">

      <section class="cta-section contractors-content">
        <div class="cta-section--content">
          <h2 class="section-title"><?php the_title(); ?></h2>
          <div class="body-content">
            <?php the_content(); ?>
          </div>
        </div>
        <div class="cta-section--button">
          <p><a href="<?php the_field('contractors_button_link'); ?>" class="btn"><?php the_field('contractors_button_label'); ?></a></p>
        </div>
      </section>

      <section class="plans">
        <?php if( have_rows('contractors_plans') ): ?>
          <?php while( have_rows('contractors_plans') ): the_row(); ?>

            <div class="plan--item">
              <h3 class="plan-title"><?php the_sub_field('contractors_plan_title'); ?></h3>
              <p class="plan-description"><?php the_sub_field('contractors_plan_description'); ?></p>
              <?php $file = get_sub_field('contractors_plan_file'); ?>
              <p class="plan-file-link">
                <a href="<?php echo $file['url']; ?>">View Project Plans</a>
              </p>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>
      </section>

    </div>

    <section class="cta-section cta-section__red">
      <div class="container">
        <div class="cta-section--content">
          <p><?php the_field('contractors_cta_content'); ?></p>
        </div>
        <div class="cta-section--button">
          <p><a href="<?php the_field('contractors_cta_button_link'); ?>" class="btn btn__white-border"><?php the_field('contractors_cta_button_label'); ?></a></p>
        </div>
      </div>
    </section>

	</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
