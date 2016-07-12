<?php get_header(); ?>

<section class="hero home-hero">
  <div class="hero-container">
    <h1 class="hero--title home-hero--title">Dream <span class="bullet">&bullet;</span> Design <span class="bullet">&bullet;</span> Deliver</h1>
    <h2 class="home-hero--subtitle"><?php the_field('home_hero_subtitle'); ?></h2>
  </div>
</section>

<main class="main" role="main">

  <section class="home-intro">
    <div class="container">
      <div class="home-intro--content">
        <p>Working with our clients to provide them innovative design solutions for their specific needs is our service specialty. Our number one concern is that your final design and finished building project meet your specific needs.</p>
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

<?php get_footer(); ?>