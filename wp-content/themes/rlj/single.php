<?php get_header(); ?>

<section class="hero">
  <div class="hero--image" ></div>
  <div class="hero-wrapper">
    <p class="hero--post-category"><?php the_category( ' / ' ); ?></p>
    <h2 class="hero--title"><?php the_title(); ?></h2>
  </div>
</section>

<main class="main negative-top-margin" role="main">
  <div class="main-wrapper">

    <div class="content-wrapper">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <div class="post--share">
          <a href="http://www.facebook.com/sharer/sharer.php?u=http://chicagomortgagetalk.com/<?php echo get_permalink(); ?>" target="_blank" class="post--share-link">
            <svg class="post--share-icon icon-facebook">
              <use xlink:href="#icon-facebook"></use>
            </svg>
          </a>
          <a href="http://twitter.com/share?text=Chicago Mortgage Talk - <?php the_title(); ?>" class="post--share-link">
            <svg class="post--share-icon icon-twitter">
              <use xlink:href="#icon-twitter"></use>
            </svg>
          </a>
          <a href="http://twitter.com/share?text=Chicago Mortgage Talk - <?php the_title(); ?>" class="post--share-link">
            <svg class="post--share-icon icon-linkedin">
              <use xlink:href="#icon-linkedin"></use>
            </svg>
          </a>
          <a href="mailto:?subject=<?php the_title(); ?>&body=http://chicagomortgagetalk.com/<? echo get_permalink(); ?>" class="post--share-link">
            <svg class="post--share-icon icon-email">
              <use xlink:href="#icon-email"></use>
            </svg>
          </a>
        </div>
  			<div class="post--content">
          <p class="post--meta">By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a> | <?php the_date('M j, Y'); ?></p>
    			<div class="body-content">
    				<?php the_content(); ?>
    			</div>
  			</div>

  		</article>
      <?php endwhile; endif; ?>

      <?php get_sidebar(); ?>

    </div>

  </div>
</main>
<?php rewind_posts(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php single_post_navigation(); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>