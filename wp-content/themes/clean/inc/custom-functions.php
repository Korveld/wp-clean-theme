<?php
function remove_editor() {
  remove_post_type_support('features', 'editor');
}
add_action('admin_init', 'remove_editor');