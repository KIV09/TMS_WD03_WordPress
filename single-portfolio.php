<?php get_header()?>
<?php the_post(); ?>
<div class="content-outer">

      <div id="page-content" class="row portfolio">

         <section class="entry cf">

            <div id="secondary"  class="four columns entry-details">

                  <h1><?php the_title(); ?></h1>

                  <div class="entry-description">
                      <?php the_excerpt(); ?>
                  </div>

                  <ul class="portfolio-meta-list">
						   <li><span>Date: </span>January 2014</li>
						   <li><span>Client </span>Styleshout</li>
						   <li><span>Skills: </span>Photoshop, Photography, Branding</li>
				      </ul>

                  <a class="button" href="http://behance.net">View project</a>

            </div> <!-- secondary End-->

            <div id="primary" class="eight columns">

                <?php if (has_post_thumbnail()): ?>
               <div class="entry-media">
                   <?php the_post_thumbnail('post-thumbnail'); ?>
               </div>
                <?php endif; ?>

               <div class="entry-excerpt">
                   <?php the_content();?>
					</div>

            </div> <!-- primary end-->

         </section> <!-- end section -->

         <ul class="post-nav cf">
			   <li class="prev"><a href="#" rel="prev"><strong>Previous Entry</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
				<li class="next"><a href="#" rel="next"><strong>Next Entry</strong> Morbi Elit Consequat Ipsum</a></li>
			</ul>

      </div>

   </div> <!-- content End-->
<?php get_footer()?>