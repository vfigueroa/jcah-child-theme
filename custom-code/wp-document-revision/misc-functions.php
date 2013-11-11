
<?php

add_action('init', 'docs_add_default_boxes');

function docs_add_default_boxes() {
    register_taxonomy_for_object_type('category', 'document');
    register_taxonomy_for_object_type('post_tag', 'document');
}
