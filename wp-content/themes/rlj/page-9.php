<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php
    $bg_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'primary-hero' );
  ?>
  <section class="hero" style="background-image: url(<?php echo $bg_image[0]; ?>);">
    <div class="hero-container">
      <h1 class="hero--title"><?php the_field('projects_hero_title'); ?></h1>
    </div>
  </section>

  <main class="main" role="main">

    <section class="projects">

      <div class="tabs project-filters">
        <a href="#" class="tabs--item is-active" data-category="all">All</a>
      <?php
      $terms = get_terms( 'project-category' );
      if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
        foreach ( $terms as $term ) {
          echo '<a href="#" class="tabs--item" data-category="' . strtolower($term->name) . '">' . $term->name . '</a>';
        }
      }
      ?>
      </div>

      <?php
        $args = array( 'post_type' => 'projects', 'posts_per_page' => -1 );
        $myposts = get_posts( $args );
      ?>
      <div class="project-grid">
        <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <?php
          $rows = get_field('project_images');
          $first_row = $rows[0];
          $image = $first_row['project_image'];
          $image_url = $image['sizes']['project-thumb'];
        ?>
        <div class="project-grid--item" data-categories="<?php rlj_project_categories(); ?>" style="background-image: url('<?php echo $image_url; ?>');">
          <a href="<?php the_permalink(); ?>" class="project-grid--link">
            <div class="project-grid--overlay"></div>
            <h3 class="project-grid--title"><?php the_title(); ?></h3>
            <p class="project-grid--view-project">View Project </p>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
      <?php wp_reset_postdata();?>

    </section>

    <section class="cta-section cta-section__red">
      <div class="container">
        <div class="cta-section--content">
          <p><?php the_field('projects_cta_content'); ?></p>
        </div>
        <div class="cta-section--button">
          <p><a href="<?php the_field('projects_cta_button_link'); ?>" class="btn btn__white-border"><?php the_field('projects_cta_button_label'); ?></a></p>
        </div>
      </div>
    </section>

	</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
