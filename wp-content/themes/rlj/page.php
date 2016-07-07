<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <main class="main" role="main">

    <section class="page-content">
      <div class="container">
        <h1 class="section-title"><?php the_title(); ?></h1>
        <div class="body-content">
      		<?php the_content(); ?>
        </div>
      </div>
    </section>

	</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
