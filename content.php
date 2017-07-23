<div class="col-md-8">
  <div class="blog-post">
    <div class="postContainer">
      <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><span class="title-header"><?php the_title(); ?></span></a></h2>
    	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
      <?php the_excerpt(); ?>
    </div>
  </div><!-- /.blog-post -->
  <br />
</div>
