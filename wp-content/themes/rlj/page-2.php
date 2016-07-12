<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php
    $bg_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'primary-hero' );
  ?>
  <section class="hero home-hero" style="background-image: url(<?php echo $bg_image[0]; ?>);">
    <div class="hero-container">
      <h1 class="hero--title home-hero--title"><?php the_field('home_hero_title'); ?></h1>
      <h2 class="home-hero--subtitle"><?php the_field('home_hero_subtitle'); ?></h2>
    </div>
  </section>

  <main class="main" role="main">

    <section class="home-intro">
      <div class="container">
        <div class="home-intro--content">
          <p><?php the_field('home_intro_content'); ?></p>
        </div>
        <div class="home-intro--cta">
          <p><a href="" class="btn">Discover our Process</a></p>
        </div>
      </div>
    </section>

    <?php
      $args = array( 'post_type' => 'projects', 'posts_per_page' => 3 );
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

  </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>