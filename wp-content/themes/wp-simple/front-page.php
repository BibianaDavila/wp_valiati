<?php
    get_header();
    if (is_paged()) {
        get_template_part( 'parts/loop');
    }
    get_footer();
?>