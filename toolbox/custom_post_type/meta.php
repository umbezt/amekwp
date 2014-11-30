<?php
/**
 * Custom Post Type Meta for Posttype
 * @author Oscar Mwanandimai
 * @version 0.1
 */

function posttype_meta()
{
    add_meta_box(
        "posttype-meta",
        "Meta Info",
        "posttype_meta_options",
        "posttype",
        "normal",
        "default"
        );
}

add_action('admin_init', 'posttype_meta');

function posttype_meta_options()
{
    global $post;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post->ID;
    }

    $custom = get_post_custom($post->ID);

    // (A) repeat as is necessary for all meta boxes
    if (isset($custom['fieldname'][0])) {
        $field = $custom['fieldname'][0];
    } else {
        $field = '';
    }

    ?>

    <div class="ui form">
        <!-- (B) repeat as is necessary for all meta boxes, match (B) -->
        <div class="field">
            <label for="field">Field</label>

            <div class="ui icon input loading fluid">
              <input type="text" placeholder="Field Instruction..." value="<?php echo $field; ?>">
              <i class="icon"></i>
          </div>
      </div>
  </div>

  <?php

}

/**
 * Save meta fields
 * @return mixed
 */
function posttype_save_extras()
{
    global $post;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post->ID;
    } else {

        // (C) Repeat as is necessary for all meta boxes, match (A)
        if (isset($_POST['position'])) {
            update_post_meta($post->ID, 'fieldname', $_POST['fieldname']);
        }

    }
}

add_action('save_post', 'posttype_save_extras');