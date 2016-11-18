<nav id="menu_row" class="navbar navbar-default inbanner" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            
        </div>

        <div class="dropdown">
            
            <button type="button" class="navbar-toggle visible-xs visible-sm" data-toggle="dropdown">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
             <?php 
                global $wp;
                $url_part = add_query_arg(array(),$wp->request);
                $url_part = substr($url_part, strrpos($url_part, '/') + 1);
                $url_part = substr($url_part,strrpos($url_part, '_')+1);
                $url_part = strtok($url_part, '-');    
            ?>

            <ul class="dropdown-menu customMenu-header">
                
                <?php 
                    if($url_part==''){
                    
                    ?>
                        <li class="active">

                    <?php
                        }else{?>
                        
                        <li>

                <?php } ?>
                    <a href="/wordpress/index.php">
                        <?php 
                            switch(pll_current_language()){
                                case 'pt':
                                    echo 'Início';
                                    break;

                                case 'en':
                                    echo 'Home';
                                    break;
                            }
                        ?>
                    </a>
                </li>
                <li class="separator"></li>
                <?php 
                    if($url_part=='orientacoes'){
                    
                    ?>
                        <li class="active">

                    <?php
                        }else{?>
                        
                        <li>

                <?php } ?>
                    <a href="<?php echo pll_current_language(); ?>_orientacoes">
                        <?php 
                            switch(pll_current_language()){
                                case 'pt':
                                    echo 'Orientações';
                                    break;

                                case 'en':
                                    echo 'Orientations';
                                    break;
                            }
                        ?>
                    </a>
                </li>
                <li class="separator"></li>
                <?php 
                    if($url_part=='publicacoes'){
                    
                    ?>
                        <li class="active">

                    <?php
                        }else{?>
                        
                        <li>

                <?php } ?>
                    <a href="<?php echo pll_current_language(); ?>_publicacoes">
                        <?php 
                            switch(pll_current_language()){
                                case 'pt':
                                    echo 'Publicações';
                                    break;

                                case 'en':
                                    echo 'Publications';
                                    break;
                            }
                        ?>
                    </a>
                </li>
                <li class="separator"></li>
               <?php 
                    if($url_part=='pesquisa'){
                    
                    ?>
                        <li class="active">

                    <?php
                        }else{?>
                        
                        <li>

                <?php } ?>
                    <a href="<?php echo pll_current_language(); ?>_pesquisa">
                        <?php 
                            switch(pll_current_language()){
                                case 'pt':
                                    echo 'Pesquisa';
                                    break;

                                case 'en':
                                    echo 'Research';
                                    break;
                            }
                        ?>
                    </a>
                </li>
                <li class="separator"></li>
                <?php 
                    if($url_part=='eventos'){
                    
                    ?>
                        <li class="active">

                    <?php
                        }else{?>
                        
                        <li>

                <?php } ?>
                    <a href="<?php echo pll_current_language(); ?>_eventos">
                        <?php 
                            switch(pll_current_language()){
                                case 'pt':
                                    echo 'Eventos & Mídia';
                                    break;

                                case 'en':
                                    echo 'Events & Media';
                                    break;
                            }
                        ?>
                    </a>
                </li>
                <li class="separator"></li>
                <?php 
                    if($url_part=='grupos'){
                    
                    ?>
                        <li class="active">

                    <?php
                        }else{?>
                        
                        <li>

                <?php } ?>
                    <a href="<?php echo pll_current_language(); ?>_grupos">
                        <?php 
                            switch(pll_current_language()){
                                case 'pt':
                                    echo 'Grupos de Trabalho';
                                    break;

                                case 'en':
                                    echo 'Working Groups';
                                    break;
                            }
                        ?>
                    </a>
                </li>
                <li class="separator"></li>
                <?php 
                    if($url_part=='estudantes'){
                    
                    ?>
                        <li class="active">

                    <?php
                        }else{?>
                        
                        <li>

                <?php } ?>
                    <a href="<?php echo pll_current_language(); ?>_estudantes">
                        <?php 
                            switch(pll_current_language()){
                                case 'pt':
                                    echo 'Estudantes';
                                    break;

                                case 'en':
                                    echo 'Students';
                                    break;
                            }
                        ?>                        
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>