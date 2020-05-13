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
            <input class="input-caption" type="text" name="post-caption" required>
        </label>
        <label>Image:
            <input type='file' id='image-upload' name='image-upload' required>
        </label>
        <input class="input-submit-post" type="submit" value="Post" name="submit-post">
        <input type='hidden' name='image_attachment_id' id='image_attachment_id' value=''>
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
            'post_content' => '<img src="http://ipa-socialmedia-feed-intern.namics.com/wp-content/uploads/2020/05/Bildschirmfoto-2020-05-12-um-13.19.41.png" />' ,
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

