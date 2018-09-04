<?php get_header(); ?>

<div class="container">
	<div class="row">
  	<?php
  		$arg = array(
  			'post_type'		 => 'post',
  			'posts_per_page' => -1
  		);
  		$get_arg = new WP_Query( $arg );
  		while ( $get_arg->have_posts() ) {
  			$get_arg->the_post();
  		?>
      <div class="col-md-4 mt-4">
            <h4><?php the_title() ?></h4>
            <p><?php the_post_thumbnail(); ?></p>
            <p><?php the_excerpt() ?></p
            <p><?php the_category() ?></p>
            <p><?php the_tags() ?></p>
            <a class="btn btn-primary" href="<?php get_permalink() ?>">Léeme completo</a>
          </div>
  		
  		<?php } wp_reset_postdata();
  	?>
	</div>
</div>


<?php get_footer(); ?>