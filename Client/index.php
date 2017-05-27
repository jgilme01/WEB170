<?php get_header();

              //start content?>
          <div id="content">    
			  <?php
if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
<article class="post-excerpt">
	<h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
	<small>Posted <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
		<div id="excerpt"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
			<?php the_excerpt(); // get the posting's excerpt ?>
			<p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
	</div>
	</article>
<?php endwhile; endif; // end the loop ?>
<small>index.php</small>
</div>            
         

<!-- End content section --></td>
        </tr>
      </table>
    </td>
  </tr>
	<?php get_sidebar(); ?>

	<?php get_footer(); ?>
