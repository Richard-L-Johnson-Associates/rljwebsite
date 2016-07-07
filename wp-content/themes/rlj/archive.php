<?php get_header(); ?>

  <?php if (have_posts()) : ?>

		<?php $post = $posts[0]; ?>

    <section class="hero">
      <div class="hero-wrapper">
      	<?php the_archive_title( '<h1 class="hero--title">', '</h1>' ); ?>
        <?php the_archive_description( '<div class="hero--description">', '</div>' ); ?>
      </div>
    </section>

    <main class="main negative-top-margin" role="main">
      <div class="main-wrapper">

        <div class="content-wrapper">

          <section class="page-content">
            <?php get_template_part('partials/post-list'); ?>
          </section>

          <?php get_sidebar(); ?>

        </div>

    	</div>
  	</main>

  <?php else : ?>

    <section class="hero">
      <div class="hero-wrapper">
        <h1 class="hero--title">Whoops!</h1>
      </div>
    </section>

    <main class="main negative-top-margin" role="main">
      <div class="main-wrapper">

        <div class="content-wrapper">

          <section class="page-content">
            <div class="body-content">
              <h3>No posts, yet.</h3>
              <p><a href="/" class="btn btn__blue">Back home</a></p>
            </div>
          </section>

          <?php get_sidebar(); ?>

        </div>

      </div>
    </main>

  <?php endif; ?>

<?php get_footer(); ?>
