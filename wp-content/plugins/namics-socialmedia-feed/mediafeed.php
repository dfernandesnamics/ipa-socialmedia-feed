<?php
/*
* Plugin Name: Internal Socialmedia Feed
* Description: Upload Posts to a Wordpress Website
* Version: 1.0
* Author: Daniel Fernandes
*/
/* Plugin initialisieren, Wordpress erkennt das Plugin durch den Kommentarblock. */

function form_creation()
{
    ?>
    <form class="form-submit-post" method="post" >
        <label>Caption:
            <textarea class="input-caption" type="text" name="post-caption" maxlength="250" required>
        </label>
        <label>Image:
            <input type='file' id='image-upload' name='image-upload'>
        </label>
        <input class="input-submit-post" type="submit" value="Post" name="submit-post">
    </form> <?php
}

add_action('template_redirect', 'createPost');

function createPost()
{
    if (isset($_POST['submit-post'])) {

        if (isset($_FILES['image-upload'])) {
            $image = $_FILES['image-upload'];
            $uploaded = media_handle_upload($image, 0);

            if(is_wp_error($uploaded)){
                echo "Error uploading file: " . $uploaded->get_error_message();
            }else{
                echo "File upload successful!";
            }
        }

        $the_post = array(
            'post_title' => wp_strip_all_tags($_POST['post-caption']),
            'post_content' => '<img src="http://ipa-socialmedia-feed-intern.namics.com/wp-content/uploads/2020/05/placeholder-image.png" alt="placeholder" />' ,
            'post_status' => 'publish',
            'post_author' => get_current_user_id(),
            'post_type' => 'post',
            'post_category' => 0
        );
        sanitize_post($the_post);
        wp_insert_post($the_post);

        wp_redirect("/");
        die();
    }

}

add_shortcode('user-posts', 'form_creation');
?>

