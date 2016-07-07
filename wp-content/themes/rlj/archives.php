<?php get_header(); ?>

<section class="hero home-hero">
  <div class="hero-wrapper">
    <h1 class="hero--title"><?php the_title(); ?></h1>
  </div>
</section>

<main class="main negative-top-margin" role="main">
  <div class="main-wrapper">

    <div class="content-wrapper">

  		<h3>Archives by Month</h3>
  		<ul>
  			<?php wp_get_archives('type=monthly'); ?>
  		</ul>

  		<h3>Archives by Subject</h3>
  		<ul>
  			 <?php wp_list_categories(); ?>
  		</ul>

    </div>

    <?php get_sidebar(); ?>

	</div>
</main>

<?php get_footer(); ?>