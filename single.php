<?php get_header(); ?>

	<div class="single-content">
		

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				            <?php 

              if(have_posts()): 
                while(have_posts()):
                  the_post();

             ?>
            <div class="single-posts">
              <div class="project-img">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="project-desc">
                <h2><?php the_title(); ?></h2>
                <p><?php the_author() ?> | <?php the_date('F j Y'); ?> at <?php the_time('g:i A') ?></p>
                <p><?php the_content(); ?></p>
              </div>
            </div>
            <?php 

                endwhile;
              endif;

             ?>
			</div>
			<div class="col-md-4">
				<?php 
					if(is_active_sidebar('right_sidebar')){
						dynamic_sidebar('right_sidebar');
					}
				 ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="comment-template">
					<?php 
						if ( comments_open() || get_comments_number() ) :
						    comments_template();
						endif;
					 ?>
				</div>
			</div>
		</div>
	</div>
</div>




<?php get_footer(); ?>