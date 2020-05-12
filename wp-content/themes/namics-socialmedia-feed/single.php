<!-- Dieses Template wurd verwendet um einen Post alleine darzustellen. Wenn man zum Beispiel auf ihn drauf Klickt. -->
<!-- Header.php aufruen -->
<?php get_header(); ?>
<!-- Standard Sidebar aufrufen. -->
<?php get_sidebar(); ?>
<!-- Inhaltscontainer für den Post -->
<div id="container">
    <!-- Wieder ein Wordpress Loop der durch die Posts geht. -->
	<?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?>
        <div class="post" id="post-<?php the_ID(); ?>">
            <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_title(); ?></a></h3>
            <div class="content-entry">
				<?php the_content(); ?>
                <p class="postmetadata">
                    <span>posted by</span> <?php the_author(); ?><br/>
                </p>
            </div>
        </div>
	<?php   endwhile;
	        endif; ?>
    <!-- End Loop -->
</div>
<?php get_footer(); ?>
