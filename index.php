<?php get_header(); ?>
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image:url('<?php get_template_directory_uri(); ?> /img/hero-background.jpg'); background: #ddd;">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->

          <div class="carousel-item" style="background-image:url('img/hero-background.jpg'); background: #ddd;">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image:url('img/hero-background.jpg'); background: #ddd;">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

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

   <?php get_footer(); ?>