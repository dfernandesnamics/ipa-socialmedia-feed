<!-- Template File für eine statische Webseite wie Kontakt oder Post Formular. -->
<!-- Header.php aufruen -->
<?php get_header(); ?>
<!-- Standard Sidebar aufrufen. -->
<?php get_sidebar(); ?>
<!-- Inhaltsbereich -->
<div id="content-box">
    <!-- Wordpress Loop um Inhalt der statischen Seite anzuzeigen. -->
<?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?>
    <div class="post">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="entry">
			<?php the_content(); ?>
        </div>
    </div>
<?php endwhile; ?>
<?php endif; ?>
    <!-- End Loop -->
</div>
<!-- Footer.php aufrufen -->
<?php get_footer(); ?>
