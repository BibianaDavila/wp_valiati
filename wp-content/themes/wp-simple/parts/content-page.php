<?php
$sidebar_select = get_post_meta($post->ID, 'sidebar_select', true);
if ($sidebar_select == 'right') {
    $sidebar_select_aside_classes = '';
    $sidebar_select_content_classes = '';
} else {
    $sidebar_select_aside_classes = 'col-sm-pull-8';
    $sidebar_select_content_classes = 'col-sm-push-4';
}
if (empty($sidebar_select) || ($sidebar_select == 'none')) {
?>
    
    <?php 
        global $wp;
        $url_part = add_query_arg(array(),$wp->request);
        $url_part = substr($url_part, strrpos($url_part, '/') + 1);
    ?>

    <div class="container-page" id="<?php echo $url_part?>">
        <div class="container">
            <div <?php post_class('content row'); ?>>
                <div class="col-xs-12 content-column">
                    <?php
                    the_content();
                    nimbus_clear();
                    get_template_part( 'parts/wp_link_pages');
                    comments_template();
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
} else {
?>
    <div <?php post_class('content row'); ?>>
        <div class="col-sm-8 content-column <?php echo $sidebar_select_content_classes; ?>">
            <?php 
            the_content();
            nimbus_clear();
            get_template_part( 'parts/wp_link_pages');
            comments_template();
            ?>
        </div>
        <div class="col-sm-4 <?php echo $sidebar_select_aside_classes; ?>">
            <?php
            get_sidebar();
            ?>
        </div>
    </div>
<?php
}
?>