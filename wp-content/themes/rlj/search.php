<?php get_header(); ?>

<section class="hero">
  <div class="hero-wrapper">
    <h2 class="hero--title">Search Results</h2>
    <p class="hero--subtitle">Results for: <span class="search-term"><?php echo wp_specialchars($s); ?></span></p>
  </div>
</section>

<main class="main negative-top-margin" role="main">
  <div class="main-wrapper">

    <div class="content-wrapper">

      <section class="page-content">
				<div class="post-list">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				  <article class="post-list--item">
				    <a href="<?php the_permalink(); ?>" class="post-list--thumb">
				      <?php the_post_thumbnail('post-thumb'); ?>
				    </a>
				      <div class="post-list--info">
				        <p class="post-list--category"><?php the_category( ' ' ); ?></p>
				        <h3 class="post-list--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				        <p class="post-list--meta">By <?php the_author(); ?> | <?php the_time('F j, Y'); ?></p>
				      </div>
				    </a>
				  </article>
				<?php endwhile; ?>
				</div>

				<?php post_navigation(); ?>

				<?php else : ?>
					<h2 class="search--no-results">Sorry, nothing found.</h2>
					<p><a href="/" class="btn btn__blue">Back Home</a></p>
				<?php endif; ?>
			</section>

			<?php get_sidebar(); ?>

		</div>

	</div>
</main>

<?php get_footer(); ?>