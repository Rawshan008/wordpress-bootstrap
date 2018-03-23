<?php get_header(); ?>
	

	<div class="single-content">
		
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h3 class="not-found"><span>404</span> Not found</h3>
				</div>
				<div class="col-md-4">
				<?php 
					if(is_active_sidebar('right_sidebar')){
						dynamic_sidebar('right_sidebar');
					}
				 ?>
			</div>
			</div>
		</div>

	</div>


<?php get_footer(); ?>