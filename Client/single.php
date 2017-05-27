<?php get_header();

              //start content?>
          <div id="content">    
			  <?php
if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
<article id="post-<?php the_ID()?>" class="post">
<h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
<small>Posted <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
<?php the_post_thumbnail( 'large' );?>
<?php the_content(''); // get page or posting written content ?>
<?php endwhile; endif; // end the loop ?>
<small>index.php</small>
	</article>
</div>            
         

<!-- End content section --></td>
        </tr>
      </table>
    </td>
  </tr>

<small>single.php</small>
	<?php get_sidebar(); ?>

	<?php get_footer(); ?>
