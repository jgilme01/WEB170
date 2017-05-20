<?php get_header();?>

<h3>What is this site?</h3>

<?php if ( have_posts() ) : while( have_posts() ) : the_post(); // start loop one ?>
<?php the_content(''); // get the home page's content ?>
<?php endwhile; endif; // end loop one ?>


<p>Stephen Evanko, PhD, Certified Advanced Rolfer ™, LMP (WA # MA 00012182)</p>
<img src="<?php bloginfo('template_directory');?>/images/137_steve-203x173.jpg" alt="">
<img src="<?php bloginfo('template_directory');?>/images/228_Ida_Rolfing.jpg" alt="Ida">
	
<h2>Postings</h2>
	<ul>
	<?php rewind_posts(); // stop loop one ?>
<?php query_posts('showposts=4'); // give directions to loop two ?>
<?php while (have_posts()) : the_post(); // start loop two ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; // end loop two ?>
	</ul>

              <!--start content
          <div id="content">    
			  <?php/*
if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
<h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
<?php the_content(''); // get page or posting written content ?>
<?php endwhile; endif; // end the loop */?>

</div>       -->     
         <div id="footer">


	<small>front-page.php</small>

	<?/*php get_sidebar(); */?>

	<?php get_footer(); ?>
