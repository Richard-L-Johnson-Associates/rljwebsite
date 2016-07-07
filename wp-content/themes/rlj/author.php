<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php $post = $posts[0]; ?>
  <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>

  <main class="main" role="main">
    <div class="main-wrapper">

    <div class="author-info">
      <div class="author-thumb">
        <?php $image = get_field('author_photo', 'user_' . $curauth->id); ?>
        <img src="<?php echo $image['url']; ?>">
      </div>

      <div class="author-info--header">
        <h1 class="author-name"><?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></h1>
        <p class="author-position"><?php the_field('author_position', 'user_' . $curauth->id); ?></p>
      </div>

      <div class="author-contact">
        <ul class="author-social">
          <li>
            <a href="<?php the_field('author_twitter', 'user_' . $curauth->id); ?>">
              <svg class="icon-social-circle icon-circle-twitter">
                <use xlink:href="#icon-circle-twitter"></use>
              </svg>
            </a>
          </li>
          <li>
            <a href="<?php the_field('author_facebook', 'user_' . $curauth->id); ?>">
              <svg class="icon-social-circle icon-circle-facebook">
                <use xlink:href="#icon-circle-facebook"></use>
              </svg>
            </a>
          </li>
          <li>
            <a href="<?php the_field('author_linkedin', 'user_' . $curauth->id); ?>">
              <svg class="icon-social-circle icon-circle-linkedin">
                <use xlink:href="#icon-circle-linkedin"></use>
              </svg>
            </a>
          </li>
          <li>
            <a href="mailto:<?php echo $curauth->user_email; ?>">
              <svg class="icon-social-circle icon-circle-email">
                <use xlink:href="#icon-circle-email"></use>
              </svg>
            </a>
          </li>
        </ul>
        <p class="author-phone">
          <svg class="icon-phone">
            <use xlink:href="#icon-phone"></use>
          </svg>
          <?php the_field('author_phone_number', 'user_' . $curauth->id); ?>
        </p>
      </div>
      <div class="author-bio body-content">
        <?php the_field('author_bio', 'user_' . $curauth->id); ?>
      </div>
      <p><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></p>

    </div>

    <div class="content-wrapper">

      <div class="section-title-bar">
        <h2 class="section-title">Articles by <?php echo $curauth->first_name; ?></h2>
      </div>

      <section class="page-content">
        <div class="post-list">
    			<?php while (have_posts()) : the_post(); ?>
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

    			<?php post_navigation(); ?>

      	</div>
    	</section>
      <?php else : ?>
      <?php endif; ?>

      <?php get_sidebar('author'); ?>

    </div>

  </div>
</main>

<?php get_footer(); ?>
