<?php get_header();?>

	<!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php 

              if(have_posts()): 
                while(have_posts()):
                  the_post();

             ?>
            <div class="single-posts">
              <div class="project-img">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
              </div>
              <div class="project-desc">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                 <p><?php the_author() ?> | <?php the_date('F j Y'); ?> at <?php the_time('g:i A') ?></p>
                <p><?php the_excerpt(); ?></p>
              </div>
            </div>
            <?php 

                endwhile;
              endif;

             ?>
          </div>
        </div>
      </div>

    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="pagination">
              <?php 
                the_posts_pagination(array(
                  'mid_size'=> 2,
                  'screen_reader_text'=> ' '
                ));
               ?>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php get_footer() ?>