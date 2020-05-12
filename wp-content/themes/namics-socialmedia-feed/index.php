<!-- erstes Template File für Inhalt -- Home-Page / Post Feed -->
<!-- Header.php aufruen -->
<?php get_header(); ?>
<!-- Standard Sidebar aufrufen. -->
<?php get_sidebar(); ?>
<!-- Inhaltscontainer für Posts -->
<div id="container">

    <!-- Start Wordpress Loop | Dies ist der Wordpress Loop, er sorgt dafür das der gewünschte Content auf dieser Seite geladen wird.-->

	<?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?>
        <div class="post" id="post-<?php the_ID(); ?>">
            <h3 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_title(); ?></a></h3>
            <div class="content">
                <!-- <img src="" alt="Image"/>-->
				<?php the_content(); ?>
                <p class="postmetadata">
                    <span>posted by</span> <?php the_author(); ?><br/>
                </p>
            </div>
        </div>
	<?php endwhile; ?>
	<?php endif; ?>
    <!-- End Loop -->
</div>
<!-- Footer.php aufrufen -->
<?php get_footer(); ?>
