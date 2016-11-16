<!--=== banner da página inicial! ===-->
<?php if (is_front_page() && !is_paged())  { ?>
    
    <!-- imagem de fundo -->
    <?php  $section_bg=nimbus_get_option('fp-banner-background-image');
    if (!empty($section_bg)) {
        $nimbus_parallax="data-parallax='scroll' data-image-src='" . esc_url($section_bg) . "' style='background: rgba(255, 255, 255, 0.48);'";
        $parallax_active="parallax_active";
    } ?>
    
    <?php if (nimbus_get_option('fp-banner-toggle') == '1') { ?>
        <section class="frontpage-banner <?php if(isset($parallax_active)){echo $parallax_active;} ?>" <?php if(isset($nimbus_parallax)){echo $nimbus_parallax;} ?>>
            <div class="container text-left">
                <div class="banner-wrap" data-sr='wait 0.4s, scale up 25%'>
                    
                    <div class="banner-part1">
                        
                        <!-- foto pessoa! -->
                        <div class="banner-image">
                            <?php if (nimbus_get_option('fp-banner-image') != '') { ?>
                                <?php 
                                    $img = esc_html(nimbus_get_option('fp-banner-image')); 
                                    echo '<img src="'.$img.'">';

                                ?>
                            <?php } ?>
                        </div>

                        <!-- links para redes sociais -->
                        <div class="social-bar">
                            <div data-sr="wait 0.2s, scale up 25%">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                            <div data-sr="wait 0.2s, scale up 25%">
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div data-sr="wait 0.2s, scale up 25%">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                            <div data-sr="wait 0.2s, scale up 25%">
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="separator"></div>
                    </div>

                    <div class="banner-part2">
                        
                        <!-- título -->
                        <?php if (nimbus_get_option('fp-banner-title') != '') { ?>
                            <div class="banner-title"><?php echo esc_html(nimbus_get_option('fp-banner-title')); ?></div>
                        <?php } ?>

                        <!-- texto -->
                        <?php if (nimbus_get_option('fp-banner-sub-title') != '') { ?>
                            <div class="banner-sub-title">
                                <?php /*echo esc_html(nimbus_get_option('fp-banner-sub-title')); */?>

                                <p>Economista (UFRGS), Mestre em Urbanismo com ênfase em Economia da Cultura (PROPUR-UFRGS), Doutor em Economia do Desenvolvimento (PPGE-UFRGS).</p>

                                <p>Professor do Departamento de Economia e Relações Internacionais da Universidade Federal do Rio Grande do Sul. 

                                <p>Professor, consultador e pesquisador em Economia da Cultura em instituições nacionais e internacionais, entre elas UFRGS, Ministério da Cultura do Brasil, FACAMP, Unesco, FEE-RS, Organização dos Estados Ibero Americanos (OEI) e Universidade de Valência – Espanha, de Pesquisa CNPQ Economia Criativa, Cultura e Desenvolvimento. Membro do Conselho Científico do CEGOV/UFRGS.</p>    
                            </div>
                        <?php } ?>

                        <!-- link -->
                        <?php if (nimbus_get_option('fp-banner-button-url') != '') { ?>
                            <div class="banner-link-button"><a href="<?php echo esc_url(nimbus_get_option('fp-banner-button-url')); ?>"><?php echo esc_html(nimbus_get_option('fp-banner-button-text')); ?></a></div>
                        <?php } ?>

                    </div>
                </div>      
            </div>    
        </section>  
    <?php } else if (nimbus_get_option('fp-banner-toggle') == '3') { ?>
        <?php // do nothing ?>
    <?php } else { ?>     
        <section class="frontpage-banner parallax_active" data-parallax='scroll' data-image-src='<?php echo get_template_directory_uri(); ?>/assets/images/preview/deer.jpg' style='background: transparent;background: rgba(0, 0, 0, 0.3);'>
            <div class="container text-left">
                <div class="banner-wrap" data-sr='wait 0.9s, scale up 25%'>
                    <div class="banner-title"><?php _e('Simple','wp-simple'); ?></div>
                    <div class="banner-sub-title"><?php _e('A Business Wordpress Theme','wp-simple'); ?></div>
                    <div class="banner-link-button"><a href="http://www.nimbusthemes.com/free/simple/"><?php _e('Learn More','wp-simple'); ?></a></div>
                </div>    
            </div>    
        </section> 
    <?php } ?> 
<?php } else { ?>
    <?php
    if ( has_post_thumbnail() ) {
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full');
        $thumb_url = $thumb_url_array[0];
        if (!empty($thumb_url)) {
            $nimbus_parallax="data-parallax='scroll' data-image-src='" . esc_url($thumb_url) . "' style='background: rgba(0, 0, 0, 0.35);'";
            $parallax_active="parallax_active";
        }
    } else {
        $section_bg=nimbus_get_option('sub-banner-background-image');
        if (!empty($section_bg)) {
            $nimbus_parallax="data-parallax='scroll' data-image-src='" . esc_url($section_bg) . "' style='background: rgba(0, 0, 0, 0.35);'";
            $parallax_active="parallax_active";
        } else {
            $nimbus_parallax="data-parallax='scroll' data-image-src='" . get_template_directory_uri() . "/assets/images/preview/deer.jpg' style='background: rgba(0, 0, 0, 0.35);'";
            $parallax_active="parallax_active";
        }
    }
    ?>
<?php } ?>