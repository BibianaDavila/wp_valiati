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

                                <?php if (nimbus_get_option('social-links-fb') != '') { ?>

                                    <a href="<?php echo esc_html(nimbus_get_option('social-links-fb')); ?>">
                                        <i class="fa fa-facebook"></i>
                                    </a>

                                <?php } ?>

                            </div>
                            <div data-sr="wait 0.2s, scale up 25%">
                                
                                <?php if (nimbus_get_option('social-links-insta') != '') { ?>

                                    <a href="<?php echo esc_html(nimbus_get_option('social-links-insta')); ?>">
                                        <i class="fa fa-instagram"></i>
                                    </a>

                                <?php } ?>

                            </div>
                            <div data-sr="wait 0.2s, scale up 25%">
                                
                                <?php if (nimbus_get_option('social-links-twitter') != '') { ?>

                                    <a href="<?php echo esc_html(nimbus_get_option('social-links-twitter')); ?>">
                                        <i class="fa fa-twitter"></i>
                                    </a>

                                <?php } ?>

                            </div>
                            <div data-sr="wait 0.2s, scale up 25%">

                                <?php if (nimbus_get_option('social-links-yt') != '') { ?>

                                    <a href="<?php echo esc_html(nimbus_get_option('social-links-yt')); ?>">
                                        <i class="fa fa-youtube"></i>
                                    </a>

                                <?php } ?>

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
                                
                                 <?php 
                                    switch(pll_current_language()){
                                        case 'pt':
                                            ?>

                                            <p>Economista (UFRGS), Mestre em Urbanismo com ênfase em Economia da Cultura (PROPUR-UFRGS), Doutor em Economia do Desenvolvimento (PPGE-UFRGS).</p>

                                            <p>Professor do Departamento de Economia e Relações Internacionais da Universidade Federal do Rio Grande do Sul. 

                                            <p>Professor, consultador e pesquisador em Economia da Cultura em instituições nacionais e internacionais, entre elas UFRGS, Ministério da Cultura do Brasil, FACAMP, Unesco, FEE-RS, Organização dos Estados Ibero Americanos (OEI) e Universidade de Valência – Espanha. Membro do Conselho Científico do CEGOV/UFRGS. Email UFRGS: leandro.valiati@gmail.com | leandro.valiati@ufrgs.br.

                                            <?php
                                            break;

                                        case 'en':
                                            ?>

                                                <p>Economist (UFRGS), Master in Urban planning with an emphasis on Economics of Culture (PROPUR-UFRGS), PhD in Development Economics (PPGE-UFRGS). </p>

                                                <p>Professor of Economics and International Relations at the Federal University of Rio Grande do Sul.</p>

                                                <p>Teacher, consultant and researcher in Economy of Culture in national and international institutions, including UFRGS, Brazil’s Ministry of Culture, FACAMP, Unesco, FEE-RS, Organization of Ibero American States (OEI) and the University of Valencia – Spain. Member of the Scientific Council CEGOV / email UFRGS: leandro.valiati@gmail.com | leandro.valiati@ufrgs.br.


                                            <?php
                                            break;
                                    }
                                ?>   
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