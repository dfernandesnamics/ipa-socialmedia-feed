<?php
/*
* Plugin Name: Internal Socialmedia Feed
* Description: Upload Posts to a Wordpress Website
* Version: 1.0
* Author: Daniel Fernandes
*/
/* Plugin initialisieren, Wordpress erkennt das Plugin durch den Kommentarblock. */

function form_creation() {
    ?>
    <form class="form-submit-post" method="post">
        <label>Caption:
            <input class="input-caption" type="text" name="post-caption" required>
        </label>
        <label>Image:
            <?php /*media_upload_form()*/ ?>
        </label>
        <input class="input-submit-post" type="submit" value="Post" name="submit-post">
    </form> <?php
}
add_action( 'template_redirect', 'createPost' );
function createPost() {
    if ( isset( $_POST['submit-post'] ) ) {
        $the_post = array(
            'post_title'    => wp_strip_all_tags( $_POST['post-caption'] ),
            'post_image'    => wp_strip_all_tags( $_POST['post-image'] ),
            'post_status'   => 'publish',
            'post_author'   => get_current_user_id(),
            'post_type'     => 'post',
            'post_category' => 0
        );
        sanitize_post( $the_post );
        wp_insert_post( $the_post );

        wp_redirect( "/" );
        die();
    }

}

add_shortcode( 'user-posts', 'form_creation' );
?>

