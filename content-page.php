<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--<h2 class="blog-post-title"><?php the_title(); ?></h2>-->
<div class="col-md-8">
	<div class="blog-post">
		<div class="postContainer">
			<?php if ( has_post_thumbnail() ) {
		  	the_post_thumbnail();
			} ?>
		 <?php the_content();?>
	 </div>
	</div><!-- /.blog-post -->
</div>
</div>
